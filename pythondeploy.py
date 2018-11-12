import os
import shutil
from git import Repo

gitlink = []
deploypath = []
i = 0

print ("Reading GIT-Links and deploypaths")

with open("gitlinks.txt", "r") as flash:
    for line in flash:
        gitlink.extend(line.split())

with open("deploypath.txt", "r") as flash:
    for line in flash:
        deploypath.extend(line.split())

print ("starting cloning")

for item in gitlink:
	if os.path.exists(deploypath[i]):
    		shutil.rmtree(deploypath[i])
		print("update folder")
	Repo.clone_from(gitlink[i], deploypath[i])
	i = i +1 
	print ("deploy succsessfull")

print ("all GIT repositories successfully deployed!")
