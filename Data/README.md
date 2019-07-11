### Data Collection

- We first download the .sra files. 
- Convert .sra to .fastq using sra toolkit. SRA toolkit contains a command fatq-dump which is used to convert the .sra files to .fastq.
```
$ fastq-dump mySRA.sra
```
- We then run cutadapt in batch mode
``` 
$ python trimming.py
```
Log files are generated for eatch of the fastq files.
- We then run [HISAT2](https://ccb.jhu.edu/software/hisat2/index.shtml). Here we give path to the index files and outputs from cutadapt as input. 
- For building genome index file, go through [this](https://www.bioinformatics.babraham.ac.uk/training/RNASeq_Course/Analysing%20RNA-Seq%20data%20Exercise.pdf)
- Then we run "mapping.py" for alignment. The paths to folders and files need to be changed. 
- The output of HISAT isa sam file. 
- Featurecounts:
```
- Input are the sam files from HISAT. These can be directly taken into Featurecounts. Refer to 'featurecount_command.txt'
