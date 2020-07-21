<?php  
 class Main_model extends CI_Model  
 {  
      function test_main()  
      {  
           echo "This is model function";  
      }  
      function insert_data($data,$data1)  
      {  
           $this->db->insert("bpas_user_profiles", $data);
           $this->db->insert("bpas_logins", $data1);   
      }  
      function insert_data1($data)  
      {  
           $this->db->insert("bpas_master_agencyparent", $data);
            
      }
      function insert_data2($data) 

      {  
       
            $this->db->insert("bpas_master_agency", $data);
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
    FROM bpas_user_profiles p 
    LEFT JOIN bpas_master_agencymainparent m ON m.AgencyMainParentID= p.AgencyMainParentID  LEFT JOIN bpas_master_agencyparent d ON d.AgencyParentID=p.AgencyParentID LEFT JOIN bpas_master_agency a ON a.AgencyID=p.AgencyID 
    LEFT JOIN masterposition ON masterposition.PositionID = p.PositionTitle
    ORDER BY  p.profileId  DESC";
    $employees = $this->db->query($query);
    return $employees;

           // $this->db->order_by('cid', 'DESC');  
           // $this->db->from("bpas_user_profiles");  
           // $query = $this->db->get();  
           // return $query;  
      } 

      function fetch_data1($data)  
      {  
            
           // $this->db->order_by('profileId', 'DESC');
           $this->db->where('Parent_Agency','$data');
          $this->db->where('AgencyId','$data');
           $this->db->from("bpas_user_profiles");  
           $query = $this->db->get();  
           return $query;  
      }  
      function delete_data($id){  
          // echo "<script>alert('Are you sure?')</script>";
           $this->db->where("cid", $id);  
           $this->db->delete("bpas_user_profiles");
           $this->db->where("relatedUserId", $id);
           $this->db->delete("bpas_logins");


           //DELETE FROM tbl_user WHERE id = $id  
      }
       function delete_data1($id){  
         // echo "<script>alert('Are you sure you want to delete?')</script>";
           $this->db->where("AgencyID", $id);  
           $this->db->delete("bpas_master_agency");
    }

     function delete_data2($id){  
          // echo "<script>alert('Are you sure?')</script>";
           $this->db->where("AgencyParentID", $id);  
           $this->db->delete("bpas_master_agencyparent");
    }

     function delete_data3($id){  
          // echo "<script>alert('Are you sure?')</script>";
           $this->db->where("AgencyID", $id);  
           $this->db->delete("bpas_user_profiles");
           $this->db->where("AgencyID", $id);
           $this->db->delete("bpas_logins");
    }
      function fetch_single_data($id)  

      {  
      		// $this->db->('profileId',);
           $this->db->where('profileId', $id);  
           $query = $this->db->get("bpas_user_profiles");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
      }  

      function fetch_single_data1($id)  
      {  
          // $this->db->('profileId',);
           $this->db->where('profileId', $id);  
           $query = $this->db->get("bpas_user_profiles");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
      }  
      function update_data($data1, $id)  
      {  
           $this->db->where("profileId", $id);  
           $this->db->update("bpas_user_profiles", $data1);  
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
      }  
 }  