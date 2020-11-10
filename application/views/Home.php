
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

<?php
$this->db->select("*");
$this->db->from("package");
$this->db->where("package.status", "1");
$this->db->limit("3,0");
$query = $this->db->get();
$packages = $query->result();
?>

<?php include('Banner.php'); ?>

<div class="home">
    <!-- ผลิตภัณฑ์แนะนำ -->
    <div class="p-3">
      <div class="row">
        <div class="title">
          <div class="title-circle">
            <img src="<?php base_url(); ?>assets/images/car.png" />
          </div>
          
          <div class="title-text">
            ผลิตภัณฑ์แนะนำ 55555
          </div>
        </div>
      </div>
    
      <div class="row rec-product">
        <?php foreach($packages as $package): ?>
          <div class="col-lg-4 col-md-6 product-item">
              <div class="frame">
                <a href="<?php echo base_url(); ?>Home/view/<?php echo $package->id ?>">
                  <div class="box-title">
                    <div class="title"><?php echo $package->package ?></div>
                  </div>
                  <img src="<?php base_url(); ?>assets/uploads/Package/<?php echo $package->image ?>">
                  <div class="des">
                    <?php echo mb_substr($package->detail,0,250,'UTF-8'); ?>
                  </div>
                </a>
              </div>
          </div>
        <?php endforeach; ?>
      </div>


      <div class="col-12 button">
      <a href="<?php echo base_url(); ?>product" class="btn btn-more">
        เพิ่มเติม</a>
      </div>
    </div>
    <!-- มารู้จัก SMART SURE กันเถอะ -->
    <div class="row p-3">
      <div class="title">
        <div class="title-circle">
          <img src="<?php base_url(); ?>assets/images/car.png" />
        </div>
        <div class="title-text">
          มารู้จัก SMART SURE กันเถอะ
        </div>
      </div>
      <?php foreach($product1 as $product1s): ?>
      <div class="col-lg-12">
        <div class="row mx-lg-5 my-lg-4">
          <div class="col-12 col-lg-6">
            <?php $youtubeId = substr($product1s->link_youtube, -11); ?>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $youtubeId; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-12 col-lg-6">
            <div class="text-left">
            <?php echo mb_substr($product1s->content,0,800,'UTF-8'); ?>
            </div>
            <div class="col-12 col-lg-11 btn-buy">
              <a href="<?php base_url();?>product">
                เพิ่มเติม
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>


    </div>
    <!-- Smart Top 10 Awards -->
    <div class="row p-3">
      <div class="title">
        <div class="title-circle">
          <img src="<?php base_url(); ?>assets/images/car.png" />
        </div>
        <div class="title-text">
          SMART TOP 10 THANK YOU PARTY 
        </div>
      </div>

      <?php foreach($product2 as $product2s): ?>
      <div class="col-lg-12">
        <div class="row mx-lg-5 my-lg-4">
          <div class="col-12 col-lg-6">
            <?php $youtubeId = substr($product2s->link_youtube, -11); ?>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $youtubeId; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-12 col-lg-6">
            <div class="text-left">

            <?php echo mb_substr($product2s->content,0,800,'UTF-8'); ?>
            </div>
            <div class="col-12 col-lg-11 btn-buy">
              <a href="<?php base_url();?>news" >
                เพิ่มเติม
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
  margin-top: 30px;
  margin-left: -6px;
  padding: 0 25px;
  height: 300px;
}
.rec-product .box-title {
  display: flex;
  align-content: center;
  position: absolute;
  z-index: 2;
  left:0;
  right:0;
  top: 25px;
  width: 100%;
}
.rec-product .box-title .title {
  margin: auto;
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

.product-item{
  text-align: center;
  display: block;
  position: relative;
  height: 300px;
  border-radius: 50px;
}
/* .frame {
  position: relative;
  height: auto;
  width: 100%;
  z-index: 1;
  left: 0;
  border-radius: 21%;
  box-shadow: 0 0 15px #b1b1b1;
}
.image {
  position: absolute;
  width: 80%;
  object-fit: cover;
  z-index: 0;
  left: 10%;
  padding-top: 6%;
} */
.button {
  margin-top: 12px;
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
  padding: 7px 0 0 0;
  background-color: #000000;
  border-bottom-right-radius: 15px;
}
.btn-buy a {
  color: #ffffff;
  font-size: 20px;
  font-weight: bold;
}

.frame {
  /*width: 300px;*/
  height: 300px;
  border: 15px solid #ffffff;
  background: #a3cfd2;
  margin: auto;
  padding: 10px 10px 70px 10px;
  border-radius: 60px;
  box-shadow: 0 0 15px #b1b1b1;
}
.frame img {
  width: 100%;
  height: 100%;
  box-shadow: 0px 8px 0px #74aeaf;
  border-radius: 40px;
  object-fit: cover;
}
.des{
    color:#000;
    margin-top: 12px;
    text-align: center;
}
@media only screen and (max-width: 991px) {
  .rec-product {
    margin-left: 18px;
    margin-right: 18px;
    padding: 0;
    height: auto;
  }
  .rec-product .box-title{
    width: 100%;
    top: 24px;
  }
  .rec-product .box-detail{
    top: 88%;
    width: 96%;
  }
  .product-item{
    padding-left: 0;
    margin-bottom: 30px;
  }
  .image{
    width: 82%;
    left: 7%;
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
.title-text {
  position: relative;
  width: auto;
  margin-left: 35px;
	padding: 19px 20px 13px 60px !important;
  color: #ffffff;
  font-size: 28px;
  font-weight: bold;
  background-color: #000000;
  border-bottom-right-radius: 30px;
  box-shadow: 0 4px 2px #b1b1b1;
}

</style>
