<?php
    function biodata(){
            
      $data = new \stdClass();
      //$data = NULL;
      $data->name = "Ardi Widyanto Saputra";
      $data->age = 21;
      $data->address = "Jalan Adhiyaksa, Kabupaten Bandung, Kecamatan Dayeuhkolot. Jawa Barat";
      $data->hobbies = array("Traveling", "Photography");
      $data->is_married = FALSE;
      
      $college = new \stdClass();
      $college->name = "Telkom University";
      $college->year_in = 2016;
      $college->year_out = 2019;
      $college->major = "D3 Sistem Informasi";
      $highSchool = new \stdClass();
      $highSchool->name = "SMA Negeri 1 Tanjung Selor";
      $highSchool->year_in = 2013;
      $highSchool->year_out = 2016;
      $highSchool->major = "IPS";
      $juniorHighschool = new \stdClass();
      $juniorHighschool->name = "SMP Negeri 1 Tanjung Selor";
      $juniorHighschool->year_in = 2010;
      $juniorHighschool->year_out = 2013;
      $juniorHighschool->major = NULL;
      $elementarySchool = new \stdClass();
      $elementarySchool->name = "SD Negeri 1 Tanjung Selor";
      $elementarySchool->year_in = 2004;
      $elementarySchool->year_out = 2010;
      $elementarySchool->major = NULL;
      $data->list_school = array($college ,$highSchool, $juniorHighschool, $elementarySchool);
      
      $skillPertama = new \stdClass();
      $skillPertama->skill_name = "Pemrograman PHP";
      $skillPertama->level = "Beginner";
      $skillKedua = new \stdClass();
      $skillKedua->skill_name = "Framework CodeIgniter atau Laravel";
      $skillKedua->level = "Beginner";
      $skillKetiga = new \stdClass();
      $skillKetiga->skill_name = "HTML";
      $skillKetiga->level = "Beginner";
      $skillKeempat = new \stdClass();
      $skillKeempat->skill_name = "CSS";
      $skillKeempat->level = "Beginner";
      $data->skills = array($skillPertama, $skillKedua, $skillKetiga, $skillKeempat);

      $interest_in_coding  = TRUE;
      
      echo json_encode($data);
    }
    biodata();
?>