rem POST /token HTTP/1.1
rem Host: oauth2.googleapis.com
rem Content-Type: application/x-www-form-urlencoded
rem 
rem client_id=your_client_id&client_secret=your_client_secret&refresh_token=refresh_token&grant_type=refresh_token
rem client_secret=your_client_secret&
rem refresh_token=refresh_token&
rem grant_type=refresh_token

curl -H "Content-Type: application/x-www-form-urlencoded" -X POST -d "client_id=462893174632-qso1qk7b83bn78l5s2niet18trctiegq.apps.googleusercontent.com&client_secret=lEhtqOikIJQ67wQ6sLYIwczk&refresh_token=1//0c3MzrbModWDGCgYIARAAGAwSNwF-L9IrIK53NFaVbx-CHegJYmmlDyZbPqLek2aw2tntMeZJz9TMDASyypVBV6s5iAaM7mOpRRk&grant_type=refresh_token" https://oauth2.googleapis.com/token