Robot arm control
-----
We've 6 robot arm components which represent the joints of the arm. Our goal is to design UI that will control the joints motion(the degree of movement of each joint), so we have 6 motors to control it.

First write a HTML code to define a structure of a webpage, then style the webpage by using CSS.

This is my webpage link: https://leenao.github.io/Robot_Arm_Control/.

   ![control](https://user-images.githubusercontent.com/46565265/128602610-213eaa63-7bcc-4add-9855-f7e8121443c2.png)
   
Database
-----
We need to build a database table of 6 columns (one for each motor). My result:

![phpmyadmin](https://user-images.githubusercontent.com/46565265/128602801-c6d69d47-3446-4daa-b880-13c6ad6af18e.png)

Connect the database with UI
---------
The degree of freedom that we entered will shown on the database

![صورة3](https://user-images.githubusercontent.com/46565265/128623317-5a5bbce2-af54-4db8-bbb4-9b980ec0bbc8.png)


Finally I Wrote a php code to connect the database with hardware. In case we press run or save this php page will shown:

![suc](https://user-images.githubusercontent.com/46565265/128623197-98b6f677-f82a-41e7-bc42-d18b9dd67eba.png)




