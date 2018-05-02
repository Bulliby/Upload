Make a `chmod 600 .passwd` and `chown http:http .passwd`, in the purpose that 
the file can only be read by the server. You have to replace http by the 
user:group configured in your server (e.g /etc/httpd/conf/httpd.conf).
