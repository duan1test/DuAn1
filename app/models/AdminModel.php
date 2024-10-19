<?php
    function getListStudent() {
        $sql = "select * from users where role_name = 'student'";
        $students = pdo_query($sql);
        foreach ($students as &$student) {
            if ($student['active'] == 1) {
                $student['active_status'] = 'Hoạt động';
            } else {
                $student['active_status'] = 'Không hoạt động';
            }
        }
        return $students;
    }
    function createStudent($code,$name,$role_name,$class,$email,$phone,$dateStart,$password,$specialized,$active){
        $sql = "insert into users(code,name,role_name,class,specialized,phone,active,dateStart,email,password) 
                VALUES('$code','$name','$role_name','$class','$specialized','$phone','$active','$dateStart','$email','$password')";
        pdo_execute($sql);
    }
    function deleteStudent($id){
        $sql = "delete from users where id=".$id;
        pdo_execute($sql);
    }
?>