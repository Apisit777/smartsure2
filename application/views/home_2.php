
<?php
$this->db->select("*");
$this->db->from("product1");
$this->db->where("product1.status", "1");
$query = $this->db->get();
$product1 = $query->result();
?>


<?php
$this->db->select("*");
$this->db->from("product2");
$this->db->where("product2.status", "1");
$query = $this->db->get();
$product2 = $query->result();
?>

<?php include('Banner.php'); ?>
<div class="home">
    <!-- ผลิตภัณฑ์แนะนำ -->
    <div class="row p-3">
      <div class="title">
        <div class="title-circle">
          <img src="<?php base_url(); ?>assets/images/car.png" />
        </div>
        <?php
        $this->db->select("*");
        $this->db->from("product");
        $this->db->where("product.status", "1");
        $this->db->limit("3");
        $query = $this->db->get();
        $products = $query->result();
        ?>
        <div class="title-text">
          ผลิตภัณฑ์แนะนำ ...
        </div>
      </div>
      <div class="row rec-product">
        <div class="col-lg-4 col-md-3" style="padding: 22px 20px 0;">
          <div class="box-title">
            <div class="title">Bronze Standard</div>
          </div>
          <div class="box-detail">
            <div class="detail">Bronze Standard<br>Bronze Standard<br>Bronze Standard</div>
          </div>
          <img class="frame" src="<?php base_url(); ?>assets/images/frame.png" />
          <img class="image" src="<?php base_url(); ?>assets/images/car12.jpg" />
        </div>
        <div class="col-lg-4 col-md-3" style="padding: 22px 20px 0;">
          <div class="box-title">
            <div class="title">Standard</div>
          </div>
          <div class="box-detail">
            <div class="detail">Standard<br>Standard<br>Standard</div>
          </div>
          <img class="frame" src="<?php base_url(); ?>assets/images/frame.png" />
          <img class="image" src="<?php base_url(); ?>assets/images/car12.jpg" />
        </div>
        <div class="col-lg-4 col-md-3" style="padding: 22px 20px 0;">
          <div class="box-title">
            <div class="title">Bronze</div>
          </div>
          <div class="box-detail">
            <div class="detail">Bronze Standard<br>Bronze Standard<br>Bronze Standard</div>
          </div>
          <img class="frame" src="<?php base_url(); ?>assets/images/frame.png" />
          <img class="image" src="<?php base_url(); ?>assets/images/car12.jpg" />
        </div>
      </div>
      <div class="col-12 button">
      <a href="" class="btn btn-more">
        เพิ่มเติม</a>
      </div>
		</div>
		
    <!-- ซื้อผลิตภัณฑ์ง่าย ๆ กับ SMART SURE -->
    <div class="row p-3">
      <div class="title">
        <div class="title-circle">
          <img src="<?php base_url(); ?>assets/images/car.png" />
        </div>
        <div class="title-text">
          ซื้อผลิตภัณฑ์ง่าย ๆ กับ SMART SURE
        </div>
      </div>
      <?php foreach($product1 as $product1s): ?>
      <div class="col-lg-12">
        <div class="row mx-lg-5 my-lg-4">
          <div class="col-12 col-lg-6">
          <?php echo $product1s->link_youtrub;?>
          </div>
          <div class="col-12 col-lg-6">
            <div class="text-left">
            <?php echo mb_substr($product1s->content,0,800,'UTF-8'); ?>
            </div>
            <div class="col-12 col-lg-11 btn-buy">
              <a href="<?php base_url();?>product/view/<?php echo $product1s->id;?>">
                ซื้อผลิตภัณฑ์
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>


    </div>
    <!-- ผลิตภัณฑ์แนะนำ -->
    <div class="row p-3">
      <div class="title">
        <div class="title-circle">
          <img src="<?php base_url(); ?>assets/images/car.png" />
        </div>
        <div class="title-text">
          ชีวิตดี๊ดีเมื่อมี SMART SURE
        </div>
      </div>

      <?php foreach($product2 as $product2s): ?>
      <div class="col-lg-12">
        <div class="row mx-lg-5 my-lg-4">
          <div class="col-12 col-lg-6">
          <?php echo $product2s->link_youtrub;?>
          </div>
          <div class="col-12 col-lg-6">
            <div class="text-left">

            <?php echo mb_substr($product2s->content,0,800,'UTF-8'); ?>
            </div>
            <div class="col-12 col-lg-11 btn-buy">
              <a href="<?php base_url();?>product/view/<?php echo $product2s->id;?>" >
                ซื้อผลิตภัณฑ์
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
</div>


<style>
.rec-product {
  margin-left: -6px;
  padding: 0 50px;
  height: 350px;
}
.rec-product .box-title {
  display: flex;
  align-content: center;
  position: absolute;
  z-index: 2;
  top: 42px;
  width: 89%;
}
.rec-product .box-title .title {
  margin: 0 auto;
  padding: 0 12px;
  font-weight: 600;
  color: #ffffff;
  background-color: #000000;
  border-radius: 0 0 7px 7px;
}
.rec-product .box-detail{
  display: flex;
  align-content: center;
  position: absolute;
  z-index: 2;
  top: 243px;
  width: 89%;
}
.rec-product .box-detail .detail{
  margin: 0 auto;
  line-height: 19px;
}
.frame {
  z-index: 1;
  position: absolute;
  border-radius: 63px;
  box-shadow: 0 0 15px #b1b1b1;
}
.image {
  position: relative;
  padding-top: 35px;
  width: 300px;
}
.button {
  text-align: right;
  padding-right: 50px;
}
.btn-more {
  padding: 8px 12px 3px;
  font-weight: 600;
  color: #ffffff;
  background-color: #a2ced1;
  border: 2px solid #70b3b8;
  box-shadow: 2px 2px 3px #b1b1b1;
}
.text-left {
  padding-right: 10px;
}
.btn-buy {
  position: absolute;
  bottom: 0;
  margin-bottom: 8px;
  padding: 8px;
  background-color: #000000;
  border-bottom-right-radius: 15px;
}
.btn-buy a {
  color: #ffffff;
  font-size: 20px;
  font-weight: bold;
}
@media only screen and (max-width: 991px) {
  .rec-product {
    margin-left: -15px;
    padding: 0;
    height: 1050px;
  }
  .button {
    text-align: center;
    padding-right: 15px;
  }
  .text-left{
      padding: 0;
  }
  .btn-buy {
      position: static;
  }
  .title{
      margin-bottom: 20px;
  }
}
</style>
