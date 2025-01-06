<?php include('header.php') ?>


<section class=" clear col-xs-12" style="background: #eff8ff;"> 
    <div class="container" style="background-color: white; margin-top:5%; margin-bottom: 5%; padding: 30px; border-radius: 25px; border: 1px solid #01a0c8;">
        <form action="">
            <div class="d-flex">
                <div class="col-md-6">
                    <label for="name" class="form-label">اسم</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">بريد إلكتروني</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="message" class="form-label">رسالة</label>
                   <textarea name="message" id="" class="form-control" rows="5"></textarea>
                </div>
                <div class="col-md-12">

                    <input type="submit" name="submit" value="يرسل" style="margin-top: 30px; background-color: #01a0c8; color: white; padding-left: 30px; padding-right: 30px; border: 1px solid #01a0c8; border-radius: 5px; padding-top: 5px; padding-bottom: 5px;">
                </div>
            </div>
        </form>
    </div>

</section>

<?php include('footer.php') ?>