<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 94px;
}
.u-header .u-icon-1 {
  width: 43px;
  height: 43px;
  margin: 24px auto 0 1076px;
  padding: 0;
}
.u-header .u-btn-1 {
  --radius: 6px;
  font-size: 0.9375rem;
  background-image: none;
  font-family: Poppins;
  font-weight: 500;
  margin: -40px 88px 0 auto;
  padding: 8px 21px 8px 20px;
}
.u-header .u-menu-1 {
  margin: -39px auto 0 495px;
}
.u-header .u-nav-1 {
  font-weight: 500;
  font-family: Poppins;
  font-size: 1rem;
  letter-spacing: normal;
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
.u-header .u-text-1 {
  font-family: Poppins;
  font-weight: 700;
  font-size: 1.5rem;
  margin: -33px auto 25px 0;
}
@media (max-width: 1199px) {
  .u-header .u-icon-1 {
    width: 30px;
    height: 30px;
    margin-top: 32px;
    margin-right: 14px;
    margin-left: auto;
  }
  .u-header .u-btn-1 {
    margin-top: -34px;
    margin-right: 75px;
    padding: 5px 11px 6px;
  }
  .u-header .u-menu-1 {
    width: auto;
    margin-top: -33px;
    margin-right: 284px;
    margin-left: auto;
  }
  .u-header .u-nav-1 {
    font-size: 0.75rem;
  }
  .u-header .u-text-1 {
    width: auto;
    margin-top: -35px;
    margin-bottom: 31px;
  }
}
@media (max-width: 991px) {
  .u-header .u-icon-1 {
    margin-right: 14px;
  }
  .u-header .u-btn-1 {
    margin-top: -34px;
    margin-right: 0;
  }
  .u-header .u-menu-1 {
    margin-top: -33px;
    margin-right: 218px;
  }
  .u-header .u-text-1 {
    margin-top: -33px;
  }
}
@media (max-width: 767px) {
  .u-header .u-menu-1 {
    margin-right: 164px;
  }
  .u-header .u-text-1 {
    font-size: 1rem;
  }
}
@media (max-width: 575px) {
  .u-header .u-menu-1 {
    margin-right: 103px;
  }
}</style>
