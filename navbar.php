
	.pad
	{
	width:100px;
	height:100px;
	padding: 20px 20px 20px 20px;
	}
	nav{
	align-items: center;
	justify-content: space-around;
	margin: auto;
	}
	
	.navbar-nav a{
	  font-size: 22px;
	  text-transform: uppercase;
	  text-decoration: none;
	  color: #fff;
	  display: block;
	  position: relative;
	  padding: 4px 0;
	  margin-left:30px;
      margin-right:30px;
	}

	.navbar-nav a::before{
	  content: "";
	  width: 100%;
	  height: 4px;
	  position: absolute;
	  left: 0;
	  bottom: 0;
	  background: #fff;
	  transition: 0.5s transform ease;
	  transform: scale3d(0,1,1);
	  transform-origin: 0 50%;
	}
	
	.navbar-nav a:hover::before{
	transform: scale3d(1,1,1);
	}
	.navbar-nav a::before{
	background: #302a75;
	transform-origin: 100% 50%;
	}
	.navbar-nav a:hover::before{
	transform-origin: 0 50%;
	}
	
	.ortala {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 10vh;
	}

    .ortala-card {
        width: 75%;
        margin-left: auto;
        margin-right: auto;
	}
	
	body {
  background-image: url("bg.png");
  background-repeat: repeat-y;
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
	}
	
    .carousel-item {
      transition: opacity 1s ease-in-out;
    }
  
    .carousel-item.active {
      opacity: 1;
    }
  
    .carousel-item-next,
    .carousel-item-prev {
      opacity: 0.50;
    }