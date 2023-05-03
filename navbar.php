
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
