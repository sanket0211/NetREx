import subprocess
import commands

import os
myCmd = './pathviewapi.sh --gene_data gene_info.txt --species osa --gene_id ENTREZ --pathway_id 03013 --suffix multistatekegg'
#out = os.system(myCmd)
out= commands.getstatusoutput(myCmd)
print(out)
