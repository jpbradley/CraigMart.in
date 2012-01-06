<article id="content" class="container">
<h3>Scope</h3>
<p>
	This project was a team project for school. We were told to construct a robot that 
	would follow attempt to solve a maze by following a black line. The robot had to be 
	autonomous, meaning we couldn&#39;t control the robot with a controller. The robot 
	would be free romaing, fit in a 6in. x 6in. square, follow black lines on a white 
	background, and solve a maze. For the Maze, the black lines would act as the centerline 
	of the &quot;corridor&quot; where the width of the black line would range from 1/4 - 3/4 inches. 
	The maze would containt straight lines, 90 degree turns/intersections, dead ends, loops, and 
	would not have any obstacles. The maze would also not be greater than 10ft x 10ft.
</p>
	<h3>Theory of Operation</h3>
<p>
	The main theory of operation would be the logic for solving the maze. We choose to 
	modify the left-hand rule of a typical maze solving robot by changing the priority of 
	turns. Our priority would be: Left, Right, Straight. What this means is that our robot would take a 
	left if it could. If it could not turn left, then it would try and turn right. If it could not 
	turn right then it would go straight. We were not very familiar with maze solving techiniques and 
	we wanted to see what the outcome would be by doing something out of the norm.
	All of the programming was done in C. Our logic was stored on the microprocessor which executed 
	our maze solving loop. We tried adding some &quot;bells and whistles&quot; to our robot with LEDs. 
	These LEDs were more for debugging so we could determine what the robot was trying to do visually.
	
<br />
		<img alt="Robot" src="/images/portfolio/electrical/linefollowingrobot/robot.png" />
<br />
All of our turns would be reliant on sensors and not time. Whenever our robot would come up to 
an intersection, the robot would see what the intersection looked like using Infrared LED sensors. 
Once the robot knew what the intersection looked like, it would attempt it&#39;s turn with the guide 
of the sensors so it would not overshoot the turn. Once the middle sensor lined up, it would 
proceed to solving the maze. To get a better idea of the sensor layout, here is a rough sketch 
of the bottom of the robot.
<br />
<img alt="Sensor Layout" src="/images/portfolio/electrical/linefollowingrobot/sensorLayout.png" />
<br />
The two sensors in the middle, sensors 3 and 6, are very important. These two sensors make it possible 
or the robot to center itself on the line at all times. The sensors on the side help determine the type 
of intersection it has encountered.
To drive the robot around, we powered a motor with a separate power supply, used an H-Bridge, and PWM 
through our microprocessor. There was a need for a separate motor to have sufficient power to the motor 
at all times. Our original power supply of 5v was not sufficient to power both the circuit and the motors.
</p>
<h3>Conclusion</h3>
<p>
Had we choosen the standard maze solving technique, our robot would have solved the maze easily. Unfortunately, 
we did not forsee a loop in the shape of a T
<br /><br />
Our robot found it&#39;s way to this loop and could not get out. We blame it on some of the lines not being 
perfectly straight, but it really boils down to our algorithm of Left Right Straight. Out of all of the other 
other teams, our robot was the best at staying on the line even if it wasn&#39;t perfectly straight.
If we were to re-program the robot to use the Left Stright Right rule, I believe we would solve the maze. 
I unfortunately do not have an electronic copy of the maze and cannot show how it looked.<br />
If you would like more details such as the Bill of Material or code, please feel free to visit my <a href="/forum">forum</a> 
and request it!<br />
Hopefully in the near future I will have time to upgrade the robot and include a better algorith as 
well as memory so it can try remember the last maze it solved.<br />
</p>
<br />
</article>
