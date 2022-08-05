<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <?php
    include("header.php");
    ?>
        <main>
            <div class="container">
                <div class="card" >
                        <div class="card-header text-center">
                            ฟอร์มสมัครสมาชิก
                        </div>
                        <div class="card-body">
                           <form name="form1" action="insert.php" method="post">
                                <div class="row">
                                    <div class="col-2"> 
                                        <label for="#" class="form-label">คำนำหน้า</label>
                                        <select class="form-select" aria-label="Default select example" id="txt_name" name="txt_name">
                                        <option selected>คำนำหน้า</option>
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                        </select> 
                                    </div>

                                    <div class="col-5"> 
                                        <label for="#" class="form-label">ชื่อ</label>
                                        <input class="form-control" type="text" id="txt_Fname" name="txt_Fname" placeholder="ชื่อ"> 
                                    </div>

                                    <div class="col-5"> 
                                        <label for="#" class="form-label">นามสกุล</label>
                                        <input class="form-control" type="text" id="txt_Lname" name="txt_Lname" placeholder="นามสกุล"> 
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2"><label for="exampleFormControlInput1" class="form-label">เพศ</label>
                                        <div class="form-check">
                                        <input type="radio" class="form-check-input" name="sex" id="sex" value="ชาย"> ชาย
                                        </div>

                                        <div class="form-check">   
                                        <input type="radio" class="form-check-input" name="sex" id="sex" value="หญิง"> หญิง
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleFormControlInput1" class="form-label">วันเกิด</label>
                                        <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate"
                                        placeholder="00/00/0000" data-provide="datepicker" data-date-language="th-th">
                                    </div>

                                    <div class="col-md-7">
                                        <label for="exampleFormControlInput1" class="form-label">ที่อยู่</label>
                                        <textarea class="form-control" name="txt_address" id="txt_address"></textarea>
                                 </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput1" class="form-label">เบอร์โทร</label>
                                        <input type="number" class="form-control" id="tel" name="tel" placeholder="เบอร์โทรของคุณ">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput1" class="form-label">อีเมล</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="อีเมลของคุณ">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                            <center>
                                <button class="btn btn-success" type="submit"><i class="bi bi-tropical-storm">Submit</i></button>
                                <button class="btn btn-danger" type="reset"><i class="bi bi-tropical-storm">Cancl</i>e</button>
                            </center>
                            </form>
                        </div>
                </div>
            </div>
        </main>
    <?php
    include("footer.php");
    ?>
</body>
</html>