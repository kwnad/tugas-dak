<?php
require_once "config/koneksi.php";

if(function_exists($_GET['function'])) 
{
    $_GET['function']();
} 

function get_guru()
{
    global $connect;      
    $query = $connect->query("SELECT * FROM guru");            
    while($row=mysqli_fetch_object($query))
    {
        $data[] =$row;
    }
      
    $response=array(
        'status' => 1,
        'message' =>'Success',
        'data' => $data
    );
      
    header('Content-Type: application/json');
    echo json_encode($response);
}

function get_guru_id()
{
    global $connect;
    if (!empty($_GET["id"])) 
    {
        $id = $_GET["id"];      
    }

    $query ="SELECT * FROM guru WHERE id= $id";      
    $result = $connect->query($query);

    while($row = mysqli_fetch_object($result))
    {
        $data[] = $row;
    } 

    if($data)
    {
        $response = array(
            'status' => 1,
            'message' =>'Success',
            'data' => $data
        );               
    } else {
        $response=array(
            'status' => 0,
            'message' =>'No Data Found'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function insert_guru()
{
    global $connect; 
    $check = array('id' => '', 'nig' => '', 'nama' => '', 'jk' => '', 'mata_pelajaran' => '');
    $check_match = count(array_intersect_key($_POST, $check));

    if($check_match == count($check)){
         
        $result = mysqli_query($connect, "INSERT INTO guru SET
        id = '$_POST[id]',
        nig = '$_POST[nig]',
        nama = '$_POST[nama]',
        jk = '$_POST[jk]',
        mata_pelajaran = '$_POST[mata_pelajaran]'");
        
        if($result)
        {
           $response=array(
              'status' => 1,
              'message' =>'Insert Success'
           );
        }
        else
        {
           $response=array(
              'status' => 0,
              'message' =>'Insert Failed.'
           );
        }
    } else {
        $response=array(
             'status' => 0,
             'message' =>'Wrong Parameter'
        );
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}

function update_guru()
{
    global $connect;
    if (!empty($_GET["id"])) {
    $id = $_GET["id"];      
    }   
         $check = array('nig' => '', 'nama' => '', 'jk' => '', 'mata_pelajaran' => '');
         $check_match = count(array_intersect_key($_POST, $check));         
         if($check_match == count($check)){
         
              $result = mysqli_query($connect, "UPDATE guru SET               
               nig = '$_POST[nig]',
               nama = '$_POST[nama]',
               jk = '$_POST[jk]',
               mata_pelajaran = '$_POST[mata_pelajaran]' WHERE id = $id");
         
            if($result)
            {
               $response=array(
                  'status' => 1,
                  'message' =>'Update Success'                  
               );
            }
            else
            {
               $response=array(
                  'status' => 0,
                  'message' =>'Update Failed'                  
               );
            }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Wrong Parameter',
                     'data'=> $id
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
}

function delete_guru()
   {
      global $connect;
      $id = $_GET['id'];
      $query = "DELETE FROM guru WHERE id=".$id;
      if(mysqli_query($connect, $query))
      {
         $response=array(
            'status' => 1,
            'message' =>'Delete Success'
         );
      }
      else
      {
         $response=array(
            'status' => 0,
            'message' =>'Delete Fail.'
         );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
   }
?>