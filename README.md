# DevOps_Pipeline with integate GIT, Github , Jenkins and Docker. 


1.	Create container image that’s has Jenkins installed  using dockerfile 

2.	When we launch this image, it should automatically starts Jenkins service in the container.

3.	Create a job chain of job1, job2, job3 and  job4 using build pipeline plugin in Jenkins 

4.	 Job1 : Pull  the Github repo automatically when some developers push repo to Github.

5.	 Job2 : By looking at the code or program file, Jenkins should automatically start the respective language interpreter install image container to deploy code ( eg. If code is of  PHP, then Jenkins should start the container that has PHP already installed ).

6.	Job3 : Test your app if it  is working or not and if not working then send the mail to the developer.

7.	Job4 : for monitor , If container where app is running is  fail due to any reson then this job should automatically start the container again.

