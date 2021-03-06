<html>
	<head>
		<title>Songs</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>

			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}
            .songs_link {
                font-size: 29px;
                margin-bottom: 10px;
                text-decoration: none;
            }
            .songs_link a {
                font-size: 29px;
                margin-bottom: 10px;
                text-decoration: none;
            }

			.quote {
				font-size: 24px;
			}

		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Songs Database</div>
                <div class="songs_link"><a href="/songs">Songs</a></div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body>
</html>
