<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>send email</title>
</head>
<!-- Complete Email template -->

<!-- Complete Email template -->

<body style="background-color:rgb(216, 216, 216)">
	<table align="center" border="0" cellpadding="0" cellspacing="0"
		width="650px" bgcolor="white" style="border:2px solid black">
		<tbody>
			<tr>
				<td align="center">
					<table align="center" border="0" cellpadding="0"
						cellspacing="0" class="col-550" width="100%">
						<tbody>
							<tr>
								<td align="center" style="background-color: #4cb96b;
										height: 50px;">

									<a href="#" style="text-decoration: none;">
										<p style="color:white;
												font-weight:bold;">
											رساله تواصل من Mr : {{$username}}

										</p>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
			<tr style="height: 100px;">
				<td align="center" style="border: none;
						border-bottom: 2px solid #4cb96b;
						padding-right: 10px;padding-left:10px">

					<p style="font-weight: bolder;font-size: 14px;
							letter-spacing: 0.025em;
							color:black;">
					    {{ $getmessage}}<br/>

                        <span style="color:#4cb96b">تم الارسال بواسطه{{$getemail}}</span>
					</p>
				</td>
			</tr>

			<tr style="display: inline-block;">
				<td style="height: 60pxpx;
						padding: 20px;
						border: none;
						border-bottom: 2px solid #361B0E;
						background-color: white;">


					<p class="data"
					style="text-align: justify-all;
							align-items: center;
							font-size: 15px;
							padding-bottom: 12px;">

                        © Copyright ahmed-gabril. All Rights Reserved
                        Designed by ahmed-gabril

					</p>

				</td>
			</tr>
			<tr style="border: none;
			background-color: #4cb96b;
			height: 40px;
			color:white;
			padding-bottom: 20px;
			text-align: center;">

<td height="40px" align="center">
	<p style="color:white;
	line-height: 1.5em;">
	Ahmed Gabril
	</p>
	<a href="#"
	style="border:none;
		text-decoration: none;
		padding: 5px;">

	<img height="30"
	src=
"https://extraaedgeresources.blob.core.windows.net/demo/salesdemo/EmailAttachments/icon-twitter_20190610074030.png"
	width="30" />
	</a>

	<a href="https://www.linkedin.com/in/ahmed-gabril-5648901a4/"
	style="border:none;
	text-decoration: none;
	padding: 5px;">

	<img height="30"
	src=
"https://extraaedgeresources.blob.core.windows.net/demo/salesdemo/EmailAttachments/icon-linkedin_20190610074015.png"
width="30" />
	</a>

	<a href="https://www.facebook.com/adel.gebril.5"
	style="border:none;
	text-decoration: none;
	padding: 5px;">

	<img height="20"
	src=
"https://extraaedgeresources.blob.core.windows.net/demo/salesdemo/EmailAttachments/facebook-letter-logo_20190610100050.png"
		width="24"
		style="position: relative;
			padding-bottom: 5px;" />
	</a>
</td>
</tr>

			</tbody></table></td>
		</tr>
		<tr>
		<td class="em_hide"
		style="line-height:1px;
				min-width:700px;
				background-color:#ffffff;">
			<img alt=""
			src="images/spacer.gif"
			style="max-height:1px;
			min-height:1px;
			display:block;
			width:700px;
			min-width:700px;"
			width="700"
			border="0"
			height="1">
			</td>
		</tr>
		</tbody>
	</table>
</body>


</html>
