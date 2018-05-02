In this example we only check the extension of the file send by the client.
Or this extension is provided by the client **navigator** and must not be
trusted

With the raw request file present in the current folder (*raw*) we can see an
http request who send a php script and make believe to the server that is a PNG.
With the folowing command we upload this file in place of our form.
`nc domain 80 < raw` domain must be replaced by your domain (e.g *localhost*)
The content of *raw* must also be modified:

After POST (1st line) put the url of the ressource who handle the upload.
On the seond line set the host like for domain in nc command (see above).
