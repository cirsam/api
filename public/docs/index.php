<html>
    <head>
        <title>Open Source API Plug-in</title>
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <link rel="stylesheet" type="text/css" media="screen, projection" href="css/style.css" />
        <script src="js/jquery-2.1.4.min.js"></script>
  </head>
<body>
    <h1>Open Source Plug-in API</h1>
        To use this application, start by specifying an endpoint. For example
    <ul>
        <li><strong>get/1</strong> will get data with id = 1</li>
        <li><strong>post/headers</strong> will insert data, still constructing it</li>
        <li><strong>put/1</strong> will update data with id = 1 still constructing it</li>
        <li><strong>delete/1</strong> will delete data with id = 1 still constructing it</li>
    </ul>
    <div class="notes">
        <h4>Useful tools:</h4>
        1) <strong> To set up git on local machine</strong> - https://www.digitalocean.com/community/tutorials/how-to-set-up-automatic-deployment-with-git-with-a-vps
        <br />
        <br />
		2) <strong> Committing to git from server this is what worked for me in the terminal or git bash</strong>
        <p>
            <span>To create a remote to github.com try:</span>
            <br />
            git remote add origin https://put your git username here@github.com/put your git username here/the name of your repository here
        </p>
        <p>
            <span>To change remote just do:</span>
            <br />
            git remote set-url origin https://put your username here@github.com/put your git username here/the name of your repository here
            <br />
            useful link http://stackoverflow.com/questions/7129232/problem-in-pushing-to-github
        </p>
    </div>
</body>
</html>