<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108371468-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108371468-1');
</script>
<script src="https://cdn.rawgit.com/scottjehl/picturefill/3.0.2/dist/picturefill.min.js"></script>
<meta name="viewport" content="width=device-width, initial scale=1.0">
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400|Open+Sans:300,400|Oswald:200,300,400|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Vollkorn" rel="stylesheet" type="text/css">
<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- Jquery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- Bootstrap JS CDN -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="/css/frontend.css">

<style>
.lf-line {
  background-color: white; width: 10%;
}
.card-container h2, .card-container p {
    color: #fff;
}
.chinese_name {
  color: #fff;
}
.price {
  color: #fff!important;
  font-size: 1.3em;
  font-weight: 800;
}
.card-container .front h2 {
    text-align: center;
}
.card-container {
    padding: 0;
}
.plus-sign {
    font-size: 4em;
    position: absolute;
    color: white;
    left: 50%;
    top: 80%;
    transform: translate(-50%, -50%);
}

.flip-container {
	perspective: 1000px;
  transform-style: preserve-3d;
}
	/*  UPDATED! flip the pane when hovered */
	.flip-container:hover .back {
		transform: rotateY(0deg);
	}
	.flip-container:hover .front {
	    transform: rotateY(180deg);
	}

/* adjust card width and height */

.flip-container, .front, .back {
	height: 400px;
  width: 100%;
}

.flipper .back {
  background: rgb(241, 101, 34);
  background-image: url("/imgs/yin-yang-bg.png");
  background-position: center;
}

/* Set Images */


.card-container:nth-child(1) .flip-container .front {
  background-repeat: no-repeat;
  background-size: cover; 
}

.card-container:nth-child(2) .flip-container .front {
  background-image: url("/imgs/massage.png");
    background-repeat: no-repeat;
  background-size: cover; 
}

.card-container:nth-child(3) .flip-container .front {
  background-image: url("/imgs/herbal-medicine.png");
    background-repeat: no-repeat;
  background-size: cover; 
}

.card-container:nth-child(4) .flip-container .front {
  background-image: url("/imgs/reiki.png");
    background-repeat: no-repeat;
  background-size: cover; 
}


/* Front Content */
.front .content {
  position: absolute;
  display: block;
  top: 50%;
  left: 50%;
  width: 85%;
  transform: translate(-50%, -50%);
}

/* Back Content */
.back .content {
  position: absolute;
  display: block;
  top: 50%;
  left: 50%;
  width: 85%;
  transform: translate(-50%, -50%);
}

/* flip speed goes here */
.flipper {
	transition: 1s;
	transform-style: preserve-3d;

	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;
  transition: 1s;
	transform-style: preserve-3d;
	position: absolute;
	top: 0;
	left: 0;
}

/* front pane, placed above back */
.front {
	z-index: 2;
	/* for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
}




/*	Some vertical flip updates */
.vertical.flip-container {
	position: relative;
}

	.vertical .back {
		transform: rotateX(180deg);
	}

	.vertical.flip-container:hover .back {
	    transform: rotateX(0deg);
	}

	.vertical.flip-container:hover .front {
	    transform: rotateX(180deg);
    }
    


</style>