<?php

if (!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$password)
			) {
				# code...
				$_SESSION['message2'] = 'Password must contain at least one lowercase char,
										at least one uppercase char,
										at least one digit,
										at least 8 characters,
										at least one special sign of @#-_$%^&+=§!?';

			}
			else
			{
			}

			?>