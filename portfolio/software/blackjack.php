<article id="content" class="container">
<p>
	For my Networking class , my team and I were told to create a program that used TCP/IP. 
	Clearly we choose a game. We were allowed to pick any programming language and decided 
	to use Java as this was the one language we all knew well.<br />
	As for what game we made? Well we made Blackjack as the title of the page so cleverly states.
	<br /><br />
	Our primary goals of the project:
	<ul>
		<li>Works over the internet</li>
		<li>Server can run multiple Blackjack games simultaneously</li>
		<li>Users can create a new account or log into an existing account</li>
		<li>Database tracks:
			<ul>
				<li>Users money</li>
				<li>Users name</li>
				<li>Password</li>
				<li>Email</li>
			</ul>
		</li>
	</ul>
	<br />
	After achieving the primary goals, we decided to add more features 
	because &ldquo;If it ain&rsquo;t broke it doesn&rsquo;t have enough features.&rdquo; 
	Some of those additional features included a GUI for the client, parallel betting, double down, 
	and stat tracking.
		
	<img alt="Blackjack GUI" src="/images/portfolio/software/blackjack/bjtable.png"/>
	
	After all of the coding was finished, we were able to host a server on one computer and 
	have the clients connect to the host from any other computer (within the school network because of firewalls).
	The game functions well and sometimes can be frustrating because it feels like the dealer cheats.
	If you would like to try this game out, you will need a few things first before you can run the server 
	successfully as well as play on the client.
	<br /><br />
	Download and install <a href="http://www.oracle.com/technetwork/java/javase/downloads/jre-6u25-download-346243.html" target="_blank">JRE</a><br />
	Download and install <a href="http://www.microsoft.com/sqlserver/en/us/editions/express.aspx" target="_blank">SQL Server Express</a><br />
	SQL server will need to be configured to allow <a href="http://msdn.microsoft.com/en-us/library/bb909712%28v=vs.90%29.aspx" target="_blank">TCP/IP ports</a><br />
	Finally, the server, client, and SQL scripts can be found at our <a href="http://code.google.com/p/cisc370-finalproject/downloads/list" target="_blank">Google code page</a><br />
	For more information about the project, you can look around the our <a href="http://code.google.com/p/cisc370-finalproject/" target="_blank">Google code page.</a>
</p>
<br/>
</article>
