<?php    
    $connect = mysqli_connect('localhost','root','','project3');
    if(mysqli_connect_error()) {
        echo "데이터베이스 연결에 실패하였습니다.";
    }

    // 예약날짜가 3일 지난 데이터는 삭제
    $result = mysqli_query($connect, "delete from p_reservation where reservation_date < date_add(now(), INTERVAL -3 day)");
    $result = mysqli_query($connect, "delete from p_reservation_status where reservation_status_date < date_add(now(), INTERVAL -3 day);");

    $customer_name = $_POST['name'];
    $customer_phone_number = $_POST['phone1']."-".$_POST['phone2']."-".$_POST['phone3'];
    
    $region_seq = null;

    $result = mysqli_query($connect, "SELECT * FROM p_reservation where customer_name='$customer_name' and customer_phone_number='$customer_phone_number'");
        while($data = mysqli_fetch_array($result)){
           $region_seq = $data['region_seq'];
           $branch_seq = $data['branch_seq'];
           $theme_name = $data['theme_name'];
           $reservation_date = $data['reservation_date'];
           $reservation_time = $data['reservation_time'];
           $booked_member = $data['booked_member'];
           $price = $data['price'];
           $purchase_way = $data['purchase_way'];
           $memo = $data['memo'];
           $register_date = $data['register_date'];

           $result2 = mysqli_query($connect, "SELECT region_name from p_region where region_seq=$region_seq");
           if($data2 = mysqli_fetch_array($result2)){
           $region_name = $data2['region_name'];
           }
           $result2 = mysqli_query($connect, "SELECT branch_name from p_branch where branch_seq=$branch_seq");
           if($data2 = mysqli_fetch_array($result2)){
           $branch_name = $data2['branch_name'];
           }

           echo $customer_name."<br>";
            echo $customer_phone_number."<br>";
            echo "region_seq : ".$region_seq.$region_name."<br>";
            echo "branch_seq : ".$branch_seq.$branch_name."<br>";
            echo "theme_name : ".$theme_name."<br>";
            echo "reservation_date : ".$reservation_date."<br>";
            echo "reservation_time : ".$reservation_time."<br>";
            echo "booked_member : ".$booked_member."<br>";
            echo "price : ".$price."<br>";
            echo "purchase : ".$purchase_way."<br>";
            echo "memo : ".$memo."<br>";
            echo "register_date : ".$register_date."<br><br>";

        }
        if ($region_seq == null){
            echo "예약정보가 없습니다."; 
        }

        
        

        

?>

<?php
    mysqli_close($connect);
?>