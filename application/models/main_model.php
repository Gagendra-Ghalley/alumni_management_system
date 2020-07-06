<?php  
 class Main_model extends CI_Model  
 {  
      function test_main()  
      {  
           echo "This is model function";  
      }  
      function insert_data($data,$data1)  
      {  
           $this->db->insert("user_profiles", $data);
           $this->db->insert("login", $data1);   
      }  
      function insert_data1($data)  
      {  
           $this->db->insert("department", $data);
            
      }
      function insert_data2($data) 

      {  
       
            $this->db->insert("batch", $data);
      }  
      function fetch_data()  
      {  
            
           $query= "SELECT CONCAT(p.FirstName, ' ', p.MiddleName, ' ', p.LastName) AS name, 
    p.cid, 
    a.name AS Agency, 
    p.EmpNo AS EmpNo,
    d.name AS ParentAgency, 
    m.name AS MainParentAgency,     
    masterposition.Description AS PositionTitle, 
    p.DateOfBirth as DOB,
    p.email as Email,
    p.telephone as Telephone,   p.Grade as Grade,
    p.gender,
        
    p.profileId,
    p.Mobile
    FROM user_profiles p 
    LEFT JOIN departmentParent m ON m.departmentParent_ID= p.departmentParent_ID  LEFT JOIN department d ON d.department_ID=p.department_ID LEFT JOIN batch a ON a.batch_ID=p.batch_ID 
    LEFT JOIN masterposition ON masterposition.PositionID = p.PositionTitle
    ORDER BY  p.profileId  DESC";
    $employees = $this->db->query($query);
    return $employees;

           // $this->db->order_by('cid', 'DESC');  
           // $this->db->from("user_profiles");  
           // $query = $this->db->get();  
           // return $query;  
      } 

      function fetch_data1($data)  
      {  
            
           // $this->db->order_by('profileId', 'DESC');
           $this->db->where('Parent_Agency','$data');
          $this->db->where('batch_ID','$data');
           $this->db->from("user_profiles");  
           $query = $this->db->get();  
           return $query;  
      }  
      function delete_data($id){  
          // echo "<script>alert('Are you sure?')</script>";
           $this->db->where("cid", $id);  
           $this->db->delete("user_profiles");
           $this->db->where("relatedUserId", $id);
           $this->db->delete("login");


           //DELETE FROM tbl_user WHERE id = $id  
      }
       function delete_data1($id){  
         // echo "<script>alert('Are you sure you want to delete?')</script>";
           $this->db->where("batch_ID", $id);  
           $this->db->delete("batch");
    }

     function delete_data2($id){  
          // echo "<script>alert('Are you sure?')</script>";
           $this->db->where("department_ID", $id);  
           $this->db->delete("department");
    }

     function delete_data3($id){  
          // echo "<script>alert('Are you sure?')</script>";
           $this->db->where("batch_ID", $id);  
           $this->db->delete("user_profiles");
           $this->db->where("batch_ID", $id);
           $this->db->delete("login");
    }
      function fetch_single_data($id)  

      {  
      		// $this->db->('profileId',);
           $this->db->where('profileId', $id);  
           $query = $this->db->get("user_profiles");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
      }  

      function fetch_single_data1($id)  
      {  
          // $this->db->('profileId',);
           $this->db->where('profileId', $id);  
           $query = $this->db->get("user_profiles");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
      }  
      function update_data($data1, $id)  
      {  
           $this->db->where("profileId", $id);  
           $this->db->update("user_profiles", $data1);  
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
      }  
 }  