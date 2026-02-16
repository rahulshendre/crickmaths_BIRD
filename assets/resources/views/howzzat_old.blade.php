@extends('layouts.app')
@section('content')

<style type="text/css">
  body {
    background-color: white;
    font-family: 'Arial', sans-serif;
  }

  .custom-banner {
    background-color: #ffffff;
/*    border-radius: 25px;
*//*    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
/**/    padding: 30px;
*/    margin: 5% auto;
/*    max-width: 1000px;
*/  }

.custom-banner .col-md-2 img{
  margin-right: 20%;
  width: 50%;
}  






  .custom-heading {
    color: #B70303;

   font-family: Spicy Rice;
font-size: 55px;
font-weight: 700;
line-height: 75.84px;
letter-spacing: 0.01em;
text-align: left;

  }

  .custom-subheading {
    font-size: 1.2rem;
    color: #333;
    margin-bottom: 15px;
  }

  .banner-image {
    width: 100%;
    max-width: 150px;
  }

  .center-image {
    width: 25%;
    max-width: 200px;
  }

  /*.col-md-8 img {
    width: 25%;
    margin-bottom: 15px;
  }*/

  .icon-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10%;
    border-radius: 1200px;


  }


.custom-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #fff;
/*    padding: 40px;
*/    /*border-radius: 25px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);*/
    margin: 5% auto;
    max-width: 90%;
  }

  .step-list {
    width: 60%;
  }

  .step-list h3 {
    

    font-family: Signika;
font-size: 28px;
font-weight: 700;
line-height: 50.22px;
text-align: left;
color: #459F01;

  }

  .step-list p {
    

    font-family: Poppins;
font-size: 15px;
font-weight: 300;
line-height: 20.04px;
text-align: left;
color: #3A3A3A;

  }

  .play-button {
background: #B70303;
    color: #FFFFFF;
    padding: 15px 25px;
    /*border: none;
    border-radius: 5px;
    font-size: 1.2rem;
    cursor: pointer;
    margin-top: 20px;*/

border-color: #B70303;
    font-family: Poppins;
font-size: 20px;
font-weight: 600;
line-height: 10px;
text-align: center;
border-radius: 10px;



  }

  .image-container {
    width: 40%;
    text-align: right;
    position: relative;
    margin-left: 0%;
        margin-top: -15%;

  }

  .image-container img {
    max-width: 60%;
    height: auto;
    border-radius: 15px;
    margin-top: 10%;
    margin-right: 15%;
  }

  .custom-section {
  position: relative; /* Ensure the section is a positioned element */
  z-index: 1;
}

.custom-section::before {
    content: "";
      background: url('{{ asset('assets/img/howzzat/vector.png') }}') no-repeat center;
    background-size: cover;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 50%;
    opacity: 0.1; /* Adjust opacity as needed */
    z-index: -1; /* Ensures the background image stays behind the content */
}

.image-container{

content: "";
      background: url('{{ asset('assets/img/howzzat/vector.png') }}') no-repeat center;
    background-size: cover;
    width: 500px;
height: 575px;
/*top: 428px;
*/left: 100px;
gap: 0px;

    opacity: 1; /* Adjust opacity as needed */
    z-index: -1; /* Ensures the background image stays behind the content */

}

.col-md-8{
      margin-top: -10%;

}

.custom-subheading{
  font-family: Signika;
font-size: 43px;
font-weight: 700;
line-height: 66.22px;
text-align: center;
color: #3A3A3A;


}

.custom-subheading-one{
 font-family: Poppins;
font-size: 26px;
font-weight: 300;
line-height: 40.04px;
text-align: center;

}

.center-image{
  width: 313px;
height: 200px;
top: 219px;
left: 548px;
gap: 0px;
opacity: 0px;

}

.container{
      margin-top: 10%;

}




.custom-banner .col-md-2 .batball-banner-image{
  width: 100;
gap: 0px;
opacity: 0px;
angle: -115.4 deg;

}


/*.stump-banner-image{
  width: 150px;
height: 292px;
top: 349px;
left: 1487px;
gap: 0px;
opacity: 0px;


}*/

.footer{
  background-color: white!important;
}

.custom-section .description{
  margin-top: -10%;
}

@media (min-width: 850px) and (max-width: 890px) {


  .custom-heading {
    color: #B70303;
    font-family: Spicy Rice;
    font-size: 35px;
    font-weight: 700;
    line-height: 10.84px;
    letter-spacing: 0.01em;
    text-align: left;
}

.center-image {
    width: 130px;
    height: 114px;
}

.custom-banner .col-md-2 .batball-banner-image {

  height: 120px;
    width: 90px;

}

.custom-banner .col-md-2 img {

      height: 140px;
    width: 58px;

  }


.custom-subheading-one {
        font-family: Poppins;
        font-size: 17px;
        font-weight: 300;
        text-align: center;
        margin-top: -2%!important;
        margin-bottom: 5%!important;
        margin-left: -15%!important;
            line-height: 0px;

    }

.custom-heading {
        color: #B70303;
        font-family: Spicy Rice;
        font-size: 30px;
        font-weight: 700;
        line-height: 10.84px;
        letter-spacing: 2px;
        text-align: left;
        margin-left: 2%;
    }


.custom-subheading {
        font-family: Signika;
        font-size: 25px;
        font-weight: 700;
        line-height: 75.22px;
        text-align: center;
        margin-left: margin-r;
        margin-right: 17%;
    }

    .image-container {
    content: "";
    background: url(http://localhost/crickmatch/assets/img/howzzat/vector.png) no-repeat center;
    background-size: cover;
    width: 500px;
    height: 575px;
    /* top: 428px; */
    left: -160px;
    gap: 0px;
    opacity: 1;
    z-index: -1;
}



}

@media (min-width: 340px) and (max-width: 350px) {

  .center-image {
    width: 45px;
    height: 45px;
    top: 219px;
    left: 548px;
    gap: 0px;
    opacity: 0px;
        margin-bottom: 7px;


  }

  .custom-heading {
    color: #B70303;
    font-family: Spicy Rice;
    font-size: 15px;
    font-weight: 700;
    line-height: 7.84px;
    letter-spacing: 0.01em;
    text-align: left;
        margin-left: 5px;
    margin-top: 40px;


}

.custom-banner .col-md-2 .batball-banner-image {

    height: 40px;
    width: 40px;
       float: inline-start!important;
    margin-left: -18px;


}

.center-image-div{
      margin-left: -93%;

}

.icon-container {
    display: flex;
    justify-content: space-between;
    align-itemsradius: center;
    flex-wrap: nowrap!important;
    border-radius: 28px;

}

.custom-subheading {
        font-family: Signika;
        font-size: 13px;
        font-weight: 700;
        line-height: 20.22px;
        text-align: center;
        color: #3A3A3A;
            margin-left: -32%;

    }

.custom-subheading-one {
        font-family: Poppins;
        font-size: 8px;
        font-weight: 300;
        line-height: 1.04px;
        text-align: center;
            margin-right: 60px;

    }

  .banner-image{
        width: 35px!important;
            float: inline-end;


  }

  .banner-stump-image {
        margin-left: -92%;
    }

 .image-container {
        content: "";
        background: url(http://localhost/crickmatch/assets/img/howzzat/vector.png) no-repeat center;
        background-size: cover;
        width: 250px;
        height: 285px;
        /* top: 428px; */
        left: 61px;
        gap: 0px;
        opacity: 1;
    }

.image-container img {
    max-width: 60%;
    height: auto;
    border-radius: 15px;
    margin-top: 10%;
    margin-right: 15%;
}
      




}


@media (min-width: 360px) and (max-width: 399px) {

  .center-image {
    width: 45px;
    height: 45px;
    top: 219px;
    left: 548px;
    gap: 0px;
    opacity: 0px;
        margin-bottom: 7px;


  }

  .custom-heading {
    color: #B70303;
    font-family: Spicy Rice;
    font-size: 17px;
    font-weight: 700;
    line-height: 7.84px;
    letter-spacing: 0.01em;
    text-align: left;
        margin-left: 5px;
    margin-top: 40px;
    letter-spacing: 1px;



}

.custom-banner .col-md-2 .batball-banner-image {

    height: 60px;
    width: 60px;
       float: inline-start!important;
    margin-left: -19px;


}

.center-image-div{
      margin-left: -91%;

}

.icon-container {
    display: flex;
    justify-content: space-between;
    align-itemsradius: center;
    flex-wrap: nowrap!important;
    border-radius: 28px;

}

.custom-subheading {
        font-family: Signika;
        font-size: 13px;
        font-weight: 700;
        line-height: 20.22px;
        text-align: center;
        color: #3A3A3A;
            margin-left: -32%;

    }

.custom-subheading-one {
        font-family: Poppins;
        font-size: 8px;
        font-weight: 300;
        line-height: 1.04px;
        text-align: center;
            margin-right: 60px;

    }

  .banner-image{
        width: 35px!important;
        float: inline-end;
    margin-right: 20px!important;

  }

  .banner-stump-image {
        margin-left: -101%;
    }

 .image-container {
    content: "";
    background: url(http://localhost/crickmatch/assets/img/howzzat/vector.png) no-repeat center;
    background-size: cover;
    width: 277px;
    height: 325px;
    /* top: 428px; */
    left: 75px;
    gap: 0px;
    opacity: 1;
}

.image-container img {
    max-width: 60%;
    height: auto;
    border-radius: 15px;
    margin-top: 10%;
    margin-right: 15%;
}
      




}


@media (min-width: 410px) and (max-width: 420px) {


  .image-container {
    content: "";
    background: url(http://localhost/crickmatch/assets/img/howzzat/vector.png) no-repeat center;
    background-size: cover;
    width: 277px;
    height: 325px;
    /* top: 428px; */
    left: 98px;
    gap: 0px;
    opacity: 1;
}

.image-container img {
    max-width: 60%;
    height: auto;
    border-radius: 15px;
    margin-top: 10%;
    margin-right: 15%;
}


}



@media (min-width: 421px) and (max-width: 431px) {


  .image-container {
    content: "";
    background: url(http://localhost/crickmatch/assets/img/howzzat/vector.png) no-repeat center;
    background-size: cover;
    width: 277px;
    height: 325px;
    /* top: 428px; */
    left: 117px;
    gap: 0px;
    opacity: 1;
}

.image-container img {
    max-width: 60%;
    height: auto;
    border-radius: 15px;
    margin-top: 10%;
    margin-right: 15%;
}


}

@media (min-width: 410px) and (max-width: 450px) {

  .center-image {
    width: 65px;
    height: 65px;
    top: 219px;
    left: 548px;
    gap: 0px;
    opacity: 0px;
        margin-bottom: 1px;


  }

 .custom-heading {
        color: #B70303;
        font-family: Spicy Rice;
        font-size: 18px;
        font-weight: 700;
        line-height: 8.84px;
        letter-spacing: 0.01em;
        text-align: left;
        margin-left: 5px;
        margin-top: 40px;
        letter-spacing: 1px;
    }

.custom-banner .col-md-2 .batball-banner-image {

    height: 90px;
    width: 70px;
       float: inline-start!important;
    margin-left: -19px;


}

.center-image-div{
      margin-left: -91%;

}

.icon-container {
    display: flex;
    justify-content: space-between;
    align-itemsradius: center;
    flex-wrap: nowrap!important;
    border-radius: 28px;

}

.custom-subheading {
        font-family: Signika;
        font-size: 15px;
        font-weight: 700;
        line-height: 32.22px;
        text-align: center;
        color: #3A3A3A;
        margin-left: -33%;
    }

.custom-subheading-one {
        font-family: Poppins;
        font-size: 8px;
        font-weight: 300;
        line-height: 1.04px;
        text-align: center;
            margin-right: 80px;

    }

  .banner-image{
        width: 50px!important;
        float: inline-end;
    margin-right: 20px!important;

  }

  .banner-stump-image {
        margin-left: -103%;
    }

 
      




}


@media (min-width: 530px) and (max-width: 550px) {

 .center-image {
        width: 100px;
        height: 86px;
        top: 219px;
        left: 548px;
        gap: 0px;
        opacity: 0px;
        margin-bottom: 1px;
    }

 .custom-heading {
        color: #B70303;
        font-family: Spicy Rice;
        font-size: 25px;
        font-weight: 700;
        line-height: 12.84px;
        letter-spacing: 0.01em;
        text-align: left;
        margin-left: 5px;
        margin-top: 40px;
        letter-spacing: 1px;
    }

.custom-banner .col-md-2 .batball-banner-image {
        height: 99px;
        width: 78px;
        float: inline-start !important;
        margin-left: -8px;
    }

.center-image-div{
      margin-left: -91%;

}

.icon-container {
    display: flex;
    justify-content: space-between;
    align-itemsradius: center;
    flex-wrap: nowrap!important;
    border-radius: 28px;

}

.custom-subheading {
        font-family: Signika;
        font-size: 18px;
        font-weight: 700;
        line-height: 42.22px;
        text-align: center;
        color: #3A3A3A;
        margin-left: -33%;
    }

.custom-subheading-one {
        font-family: Poppins;
        font-size: 11px;
        font-weight: 300;
        line-height: 5.04px;
        text-align: center;
        margin-right: 98px;
    }

  .banner-image {
        width: 57px !important;
        float: inline-end;
        margin-right: 47px !important;
    }

  .banner-stump-image {
        margin-left: -103%;
    }

     .image-container {
        content: "";
        background: url(http://localhost/crickmatch/assets/img/howzzat/vector.png) no-repeat center;
        background-size: cover;
        width: 315px;
        height: 368px;
        /* top: 428px; */
        left: 192px;
        gap: 0px;
        opacity: 1;
    }

.image-container img {
    max-width: 60%;
    height: auto;
    border-radius: 15px;
    margin-top: 10%;
    margin-right: 15%;
}
      




}




@media (min-width: 768px) and (max-width: 799px) {

  .center-image {
    width: 130px;
    height: 125px;
    top: 219px;
    left: 548px;
    gap: 0px;
    opacity: 0px;
        margin-bottom: 7px;


  }

  .custom-heading {
        color: #B70303;
        font-family: Spicy Rice;
        font-size: 30px;
        font-weight: 700;
        line-height: 41.84px;
        letter-spacing: 0.01em;
        text-align: left;
        margin-left: 5px;
        /* margin-top: 37px; */
        letter-spacing: 1px;
    }



.custom-banner .col-md-2 .batball-banner-image {
        height: 126px;
        width: 100px;
        float: inline-start !important;
        margin-left: 10px;
    }

/*.center-image-div{
      margin-left: -91%;

}
*/
.icon-container {
    display: flex;
    justify-content: space-between;
    align-itemsradius: center;
    flex-wrap: nowrap!important;
    border-radius: 50px;

}

.custom-subheading {
        font-family: Signika;
        font-size: 21px;
        font-weight: 700;
        line-height: 35.22px;
        text-align: center;
        color: #3A3A3A;
        margin-left: -10%;
    }

    .custom-subheading-one {
        font-family: Poppins;
        font-size: 15px;
        font-weight: 300;
        line-height: 8.04px;
        text-align: center;
        margin-right: 60px;
    }

  .banner-image {
        width: 70px !important;
        float: inline-end;
        margin-right: 30px !important;
    }

  /*.banner-stump-image {
        margin-left: -101%;
    }*/

 .image-container {
    content: "";
    background: url(http://localhost/crickmatch/assets/img/howzzat/vector.png) no-repeat center;
    background-size: cover;
    width: 277px;
    height: 325px;
    /* top: 428px; */
    left: -20px;
    gap: 0px;
    opacity: 1;
}

.image-container img {
    max-width: 60%;
    height: auto;
    border-radius: 15px;
    margin-top: 10%;
    margin-right: 15%;
}
      




}


@media (min-width: 810px) and (max-width: 850px) {

  .center-image {
    width: 130px;
    height: 125px;
    top: 219px;
    left: 548px;
    gap: 0px;
    opacity: 0px;
        margin-bottom: 7px;


  }

  .custom-heading {
        color: #B70303;
        font-family: Spicy Rice;
        font-size: 30px;
        font-weight: 700;
        line-height: 41.84px;
        letter-spacing: 0.01em;
        text-align: left;
        margin-left: 5px;
        /* margin-top: 37px; */
        letter-spacing: 1px;
    }



.custom-banner .col-md-2 .batball-banner-image {
        height: 126px;
        width: 100px;
        float: inline-start !important;
        margin-left: 10px;
    }

/*.center-image-div{
      margin-left: -91%;

}
*/
.icon-container {
    display: flex;
    justify-content: space-between;
    align-itemsradius: center;
    flex-wrap: nowrap!important;
    border-radius: 50px;

}

.custom-subheading {
        font-family: Signika;
        font-size: 21px;
        font-weight: 700;
        line-height: 35.22px;
        text-align: center;
        color: #3A3A3A;
        margin-left: -10%;
    }

    .custom-subheading-one {
        font-family: Poppins;
        font-size: 15px;
        font-weight: 300;
        line-height: 8.04px;
        text-align: center;
        margin-right: 60px;
    }

  .banner-image {
        width: 70px !important;
        float: inline-end;
        margin-right: 30px !important;
    }

  /*.banner-stump-image {
        margin-left: -101%;
    }*/

 .image-container {
    content: "";
    background: url(http://localhost/crickmatch/assets/img/howzzat/vector.png) no-repeat center;
    background-size: cover;
    width: 277px;
    height: 325px;
    /* top: 428px; */
    left: -11px;
    gap: 0px;
    opacity: 1;
}

.image-container img {
    max-width: 60%;
    height: auto;
    border-radius: 15px;
    margin-top: 10%;
    margin-right: 15%;
}
      




}


@media (min-width: 910px) and (max-width: 950px) {

  .center-image {
    width: 130px;
    height: 125px;
    top: 219px;
    left: 548px;
    gap: 0px;
    opacity: 0px;
        margin-bottom: 7px;


  }

  .custom-heading {
        color: #B70303;
        font-family: Spicy Rice;
        font-size: 30px;
        font-weight: 700;
        line-height: 41.84px;
        letter-spacing: 0.01em;
        text-align: left;
        margin-left: 5px;
        /* margin-top: 37px; */
        letter-spacing: 1px;
    }
.custom-banner .col-md-2 .batball-banner-image {
        height: 126px;
        width: 100px;
        float: inline-start !important;
        margin-left: 10px;
    }

/*.center-image-div{
      margin-left: -91%;

}
*/
.icon-container {
    display: flex;
    justify-content: space-between;
    align-itemsradius: center;
    flex-wrap: nowrap!important;
    border-radius: 50px;

}

.custom-subheading {
        font-family: Signika;
        font-size: 25px;
        font-weight: 700;
        line-height: 35.22px;
        text-align: center;
        color: #3A3A3A;
        margin-left: -22%;
    }

    .custom-subheading-one {
        font-family: Poppins;
        font-size: 15px;
        font-weight: 300;
        line-height: 31.04px;
        text-align: center;
        margin-right: 60px;
    }

  .banner-image {
        width: 75px !important;
        float: inline-end;
        margin-right: 30px !important;
    }

  /*.banner-stump-image {
        margin-left: -101%;
    }*/

 .image-container {
    content: "";
    background: url(http://localhost/crickmatch/assets/img/howzzat/vector.png) no-repeat center;
    background-size: cover;
    width: 306px;
    height: 355px;
    /* top: 428px; */
    left: -3px;
    gap: 0px;
    opacity: 1;
}

.image-container img {
    max-width: 60%;
    height: auto;
    border-radius: 15px;
    margin-top: 10%;
    margin-right: 15%;
}
      




}

@media (min-width: 1024px) and (max-width: 1050px) {

  .center-image {
    width: 200px!important;
    height: 150px;
    top: 219px;
    left: 548px;
    gap: 0px;
   }

   .custom-heading {
    color: #B70303;
    font-family: Spicy Rice;
    font-size: 40px;
    font-weight: 700;
    line-height: 23.84px;
    letter-spacing: 1px;
    text-align: left;
}

    .custom-subheading {
        font-family: Signika;
        font-size: 30px;
        font-weight: 700;
        line-height: 70.22px;
        text-align: center;
        margin-left: -141px;
    }

    .custom-subheading-one {
        font-family: Poppins;
        font-size: 20px;
        font-weight: 300;
        line-height: 13.04px;
        text-align: center;
    }

.custom-banner .col-md-2 .batball-banner-image {
  height: 161px;
    width: 141px;
            margin-left: 21px;

}

.custom-banner .banner-stump-image img {
    margin-right: 41px;
    width: 68%;
}
.icon-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10%;
    border-radius: 56px;
}

.image-container {
    content: "";
    background: url(http://localhost/crickmatch/assets/img/howzzat/vector.png) no-repeat center;
    background-size: cover;
    width: 343px;
    height: 394px;
    /* top: 428px; */
    left: 0px;
    gap: 0px;
    opacity: 1;
    z-index: -1;
}

.custom-banner{

/*      margin-left: 10%;
*/

}


}


@media (min-width: 1279px) and (max-width: 1299px) {

  .image-container {
    content: "";
    background: url(http://localhost/crickmatch/assets/img/howzzat/vector.png) no-repeat center;
    background-size: cover;
    width: 439px;
    height: 505px;
    /* top: 428px; */
    left: 0px;
    gap: 0px;
    opacity: 1;
    z-index: -1;
}

.icon-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10%;
    border-radius: 82px;
}

.custom-heading {
    color: #B70303;
    font-family: Spicy Rice;
    font-size: 50px;
    font-weight: 700;
    line-height: 54.84px;
    letter-spacing: 0.01em;
    text-align: left;
}

.center-image {
    width: 313px;
    height: 200px;
  }

  .custom-subheading {
    font-family: Signika;
    font-size: 35px;
    font-weight: 700;
    line-height: 75.22px;
    text-align: center;
    color: #3A3A3A;
    margin-right: 280px;
}

.custom-subheading-one {
    font-family: Poppins;
    font-size: 20px;
    font-weight: 300;
    line-height: 40.04px;
    text-align: center;
    margin-left: -245px;
}

.center-image-div .text-center{

    margin-left: 100px;


}

.batball-banner-image{
  height: 170px;
    width: 144px!important;
    margin-left: 52px;
}

.banner-image{
  height: 225px;
    width: 100px;
    margin-right: 93px;
}

}





</style>

<section style="background: white; margin: 0; padding: 0;"> 
  <div class="container-fluid p-5 text-center custom-banner">
      <div class="row icon-container" style="background: #F2F2F2;">
        <div class="col-md-2">
          <img src="{{config('app.baseURL')}}/assets/img/howzzat/batball.png" class="batball-banner-image" alt="Cricket Bat Ball">
        </div>
        <div class="col-md-8 center-image-div">
          <div class="text-center">
            <div style="display:flex; align-items: flex-end;">
              <img src="{{config('app.baseURL')}}/assets/img/howzzat/cartton.png" class="center-image" alt="Bunny Icon">
              <h1 class="custom-heading">Howzzat! Work?</h1>
            </div>
            <p class="custom-subheading">Wanna be like Bun2?</p>
            <p class="custom-subheading-one"> Let’s show you how to be a CricMaths Champ</p>
          </div>
        </div>
        <div class="col-md-2 banner-stump-image">
          <img src="{{config('app.baseURL')}}/assets/img/howzzat/stump.png" class="banner-image" alt="Cricket Stumps">
        </div>
      </div>
  </div>
</section>

<!-- <section style="background: white; margin: 0; padding: 0;"> 
  <div class="container-fluid p-5 text-center custom-banner">
      <div class="row icon-container" style="background: #F2F2F2;">
        <div class="col-md-2">
          <img src="{{config('app.baseURL')}}/assets/img/howzzat/batball.png" class="batball-banner-image" alt="Cricket Bat Ball" style="width: 25%;">
        </div>
        <div class="col-md-8">
          <div class="text-center">
            <div style="display:flex; align-items: flex-end;">
              <img src="{{config('app.baseURL')}}/assets/img/howzzat/cartton.png" class="center-image" alt="Bunny Icon" style="width:35%;height: ;">
              <h1 class="custom-heading">Howzzat! Work?</h1>
            </div>
            <p class="custom-subheading">Wanna be like Bun?</p>
            <p class="custom-subheading-one"> Let’s show you how to be a CricMaths Champ</p>
          </div>
        </div>
        <div class="col-md-2">
          <img src="{{config('app.baseURL')}}/assets/img/howzzat/stump.png" class="banner-image" alt="Cricket Stumps" style="width:15%;">
        </div>
      </div>
  </div>
</section> -->

<!-- Second Section -->
<section style="background: white; margin: 0; padding: 0;"> <!-- Removed margin and padding -->
  <div class="container custom-section"> 
    <div class="row">
      <div class="col-md-8 description">
    <div class="step-list">
      <h3>Step 1: Choose Your Cool Avatar</h3>
      <p>Select who you want to be on the cricket field.</p>

      <h3>Step 2: Gear up</h3>
      <p>Choose from any of the matches you wish to play.</p>

      <h3>Step 3: Get, Set, Go!</h3>
      <p>It’s game time! Enter the CricMaths league and hit a six!</p>

      <h3>Step 4: Answer Maths Questions</h3>
      <p>As you play, maths questions will pop up on the screen. Choose the correct answer to move to the next ball.</p>

      <h3>Step 5: Earn rewards</h3>
      <p>With every over, collect your reward points because every ball counts.</p>

      <button class="play-button">PLAY</button>
    </div>
    </div>

    <div class="col-md-4">
    <div class="image-container">
      <img src="{{config('app.baseURL')}}/assets/img/howzzat/cricketer.png" alt="Cricket Playing Boy">
    </div>
  </div>
  </div>
  </div>
</section>






@endsection
