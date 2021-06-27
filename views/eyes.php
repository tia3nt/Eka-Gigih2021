<div class="scene">
  <div class="white">
    <span class="iris"></span>
  </div>
</div>



<!-- ======================= -->

<div class="wrap">
	blink
	<div class="eye blink"></div>
	<div class="eye blink"></div>
</div>

<div class="wrap">
	blink 1
	<div class="eye blink"></div>
	<div class="eye blink d1"></div>
</div>

<div class="wrap">
	d blink
	<div class="eye double-blink"></div>
	<div class="eye double-blink"></div>
</div>

<div class="wrap">
	grin
	<div class="eye grin"></div>
	<div class="eye grin"></div>
</div>

<div class="wrap">
	sad
	<div class="eye sad"></div>
	<div class="eye sad"></div>
</div>

<div class="wrap">
	up
	<div class="eye up"></div>
	<div class="eye up"></div>
</div>

<div class="wrap">
	down
	<div class="eye down"></div>
	<div class="eye down"></div>
</div>




<style>
*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.scene {
  width: 300px;
  height: 300px;
  display: inline-block;
  margin: 20px;
  perspective: 1200px;
  perspective-origin: 50% 50%;
}

.white {
  display: inline-block;
  width: 100%;
  height: 100%;
  margin: 0;
  border-radius: 50%;
  position: relative;
  background: radial-gradient(circle at 50% 40%, #fcfcfc, #efeff1 66%, #9b5050 100%);
}

.white:before {
  content: "";
  position: absolute;
  background: radial-gradient(circle at 50% 120%, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0) 70%);
  border-radius: 50%;
  bottom: 2.5%;
  left: 5%;
  opacity: 0.6;
  height: 100%;
  width: 90%;
  filter: blur(5px);
  z-index: 2;
}

.white:after {
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  top: 5%;
  left: 10%;
  border-radius: 50%;
  background: radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8) 14%, rgba(255, 255, 255, 0) 24%);
  transform: translateX(-80px) translateY(-90px) skewX(-20deg);
  filter: blur(10px);
}

.iris {
  width: 40%;
  height: 40%;
  margin: 30%;
  border-radius: 50%;
  background: radial-gradient(circle at 50% 50%, #208ab4 0%, #6fbfff 30%, #4381b2 100%);
  transform: translateX(68px) translateY(-60px) skewX(15deg) skewY(2deg);
  position: absolute;
  animation: move-eye-skew 5s ease-out infinite;
}

.iris:before {
  content: "";
  display: block;
  position: absolute;
  width: 37.5%;
  height: 37.5%;
  border-radius: 50%;
  top: 31.25%;
  left: 31.25%;
  background: black;
}

.iris:after {
  content: "";
  display: block;
  position: absolute;
  width: 31.25%;
  height: 31.25%;
  border-radius: 50%;
  top: 18.75%;
  left: 18.75%;
  background: rgba(255, 255, 255, 0.2);
}

@keyframes move-eye-skew {
  0% {
    transform: none;
  }
  20% {
    transform: translateX(-68px) translateY(30px) skewX(15deg) skewY(-10deg) scale(0.95);
  }
  25%, 44% {
    transform: none;
  }
  50%, 60% {
    transform: translateX(68px) translateY(-40px) skewX(5deg) skewY(2deg) scaleX(0.95);
  }
  66%, 100% {
    transform: none;
  }
}

/* ===================================== */



$bg: #EAE0CE;
$cubic: cubic-bezier(0.785, 0.135, 0.15, 0.86);

html, body {
	width: 100%;
	height: 100%;
}

body {
	box-sizing: border-box;
	display: flex;
	flex-direction: column;
	align-items: center;
	background: $bg;

	@media only screen and (min-width: 1180px) {
		flex-direction: row;
		justify-content: center;
	}
}

.wrap {
	position: relative;
	width: 100px;
	height: 40px;
	margin: 0 2rem;
	color: darken($bg, 10);
	line-height: 40px;
	font-size: 2rem;
	text-align: center;
	font-weight: 400;
	padding-top: 5.5rem;
	margin-bottom: 0;

	.eye {
		position: absolute;
		margin: auto;
		top: 0;
		bottom: 0;
		background: #fff;
		width: 40px;
		height: 40px;
		border-radius: 50%;
		display: inline-block;
		overflow: hidden;

		&:before {
			content: '';
			position: absolute;
			margin: auto;
			width: 10px;
			height: 10px;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			border-radius: 50%;
			background: rgba(20,20,20,1);
		}

		&.grin:after, &.sad:after {
			content: '';
			position: absolute;
			width: calc(100% + 20px);
			height: 0;
			border-radius: 50%;
			background: $bg;
			left: -10px;
		}
		&.grin:after {
			bottom: -10px;
		}
		&.sad:after {
			top: -10px;
		}

		&:first-child {
			left: 0;
		}
		&:last-child {
			right: 0;
		}

		&.blink {
			animation: blink 4s $cubic infinite;
		}

		&.double-blink {
			animation: double-blink 4s $cubic infinite;
		}

		&.grin:before {
			animation: grinb 4s $cubic infinite;
		}
		&.grin:after {
			animation: grina 4s $cubic infinite;
		}
		&.sad:before {
			animation: sadb 4s $cubic infinite;
		}
		&.sad:after {
			animation: grina 4s $cubic infinite;
		}
		&.up:before {
			animation: grinb 4s $cubic infinite;
		}
		&.down:before {
			animation: sadb 4s $cubic infinite;
		}

		&.d1 {
			animation-delay: .1s;
		}
	}
}

// Blink
@keyframes blink {
	0%, 8% {
		height: 40px;
	}
	10%, 12% {
		height: 5px;
	}
	14%, 100% {
		height: 40px;
	}
}

// Double Blink
@keyframes double-blink {
	0%, 8% {
		height: 40px;
	}
	10%, 12% {
		height: 10px;
	}
	13% {
		height: 40px;
	}
	14%, 16% {
		height: 0;
	}
	18%, 100% {
		height: 40px;
	}
}

// Grin
@keyframes grinb {
	0%, 10% {
		bottom: 0;
	}
	20%, 40% {
		bottom: 50%;
	}
	50%, 100% {
		bottom: 0;
	}
}
@keyframes grina {
	0%, 10% {
		height: 0;
	}
	20%, 40% {
		height: 100%;
	}
	50%, 100% {
		height: 0;
	}
}

// Sad
@keyframes sadb {
	0%, 10% {
		top: 0;
	}
	20%, 40% {
		top: 50%;
	}
	50%, 100% {
		top: 0;
	}
}
</style>
