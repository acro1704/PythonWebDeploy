import os
import shutil
from git import Repo

gitlink = []
deploypath = []
i = 0

print ("Reading GIT-Links and deploypaths <br>")

with open("gitlinks.txt", "r") as flash:
    for line in flash:
        gitlink.extend(line.split())

with open("deploypath.txt", "r") as flash:
    for line in flash:
        deploypath.extend(line.split())

print ("Reading successful!<br>")

for item in gitlink:
	print ("<h1>Starting Cloning from:</h1> ");
	print (gitlink[i]);
	print ("<br> to:");
	print (deploypath[i]);
	print ("<br>");
	if os.path.exists(deploypath[i]):
    		shutil.rmtree(deploypath[i])
		print("Path already exists. Update folder. <br>")
	Repo.clone_from(gitlink[i], deploypath[i])
	i = i +1 
	print ("Deploy succsessfull <br>")

print ("<h1>All GIT repositories successfully deployed!</h1>")
