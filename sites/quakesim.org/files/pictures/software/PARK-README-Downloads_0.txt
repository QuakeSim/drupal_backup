   In this directory is a UNIX compressed tar file PARK_Package.tar.Z 
that allows recreation of all programs, project-specific libraries, 
and input and output files associated with this Baseline Milestone 
run. 

It was created by running

tar -cvf PARK_Package.tar BaselineMilestone

while in the parent directory (/u/tullis) of the BaselineMilestone 
directory on the SGI machine, turing, at NASA Ames, after the 
executable file and the object files were temporarily moved. (This 
is described more fully in Documentation.txt file in this website's 
BaselineMilestone directory.) Then the tar file was compressed using: 

compress PARK_Package.tar
  

   This file thus contains the content of that BaselineMilestone 
directory and all its subdirectories and files, exclusive of the 
executable file and the object files. If the tar file is expanded 
in some directory of one's own machine it will produce an 
extensive directory structure that includes the source programs for 
the PARK earthquake model, the input and output files for the 
baseline milestone (as well as for some smaller demonstration 
files), and, under a directory named t17-7, it contains the Fast 
Multipole Library that the PARK model is linked to. This is done on
a UNIX machine by typing

uncompress PARK_Package.tar.Z

and then

tar -xvf PARK_Package.tar


   Once the tar file is expanded, the Fast Multipole library and 
the PARK model programs can be compiled and linked as is described 
in the README-Compile.txt file in the BaselineMilestone directory 
of this web site. The Documentation.txt file in this website's 
BaselineMilestone directory has a more complete explanation of what 
is in each directory; the README files in the "in" and "out" 
directories also have more complete explanation of the files in 
these directories.

