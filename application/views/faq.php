


<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
            ============================================= -->

                

                <h3>FAQs</h3>

                <div class="accordion clearfix">

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Abstract</div>
                    <div class="acc_content clearfix">With the existence of large publicly available plant gene expression data-sets, many groups have undertaken data analyses to construct gene coexpression networks and functionally annotate genes. Often, a large compendium of unrelated or condition-independent expression data is used to construct gene networks. Condition-dependent expression experiments consisting of well-defined conditions/treatments have also been used to create coexpression networks to help examine particular biological processes. Gene networks derived from either condition-dependent or condition-independent data can be difficult to interpret if a large number of genes and connections are present. However, algorithms exist to identify modules of highly connected and biologically relevant genes within coexpression networks. </div>

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Why are we building gene co-expression network?</div>
                    <div class="acc_content clearfix">Co-expression network analysis is a powerful approach for data-driven hypothesis construction and gene prioritization, and provides novel insights into the system-level understanding of plant cellular processes.</div>

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What is a co-expression network? Can you explain its architecture?What is the goal you want to achieve?</div>
                    <div class="acc_content clearfix">The term ‘co-expression’ refers to a similarity of gene expression patterns across a variety of experimental conditions. The term ‘network’ is widely used in many fields of science. For example, in plant molecular genetics, a directed network is frequently used to illustrate positive and negative regulatory relationships between genes. Here, we refer to a network as an undirected graph composed of nodes and links representing genes and mutual co-expression relationships, respectively. The term ‘topology’ refers to patterns of node-to-node connectivity, or configuration of links.<br>The complexity of biological networks has a hierarchy. Between the levels of genomewide organization and individual molecular components, there are substructures such as modules, motifs and pathways, characterized by topological properties such as degree distribution, network density and clustering coefficient. There is particular interest in identifying topological modules. Given that most biological functions cannot be attributed to a single gene, a module is likely to represent a set of genes having a discrete function that arises from interactions among them. Conversely, the analysis of local modules may be more informative with respect to the regulatory mechanisms of the specific biological processes. Therefore, the identification of the modular structure is a primary goal in co-expression network analysis.</div>

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What is the difference between condition dependent and condition independent network? Why would you choose one over another?</div>
                    <div class="acc_content clearfix">Condition-dependent data consist of planned treatments/conditions that are designed to record transcript responses to specific physiological states. In contrast, condition-independent data are a compilation of unrelated treatments/conditions that are not designed to provide insight to a particular biological response. Most large-scale plant gene coexpression resources utilize condition-independent analyses that rely upon large compendia of gene expression data sets from independent sources. Such analyses are convenient because they make use of the maximal available data. However, there are potential problems with condition-independent analyses as it has been demonstrated that gene coexpression analysis with too many microarray samples can result in the loss of information. Difficulty in interpreting the biological meaning of correlations in complex condition independent data-sets is a second problem with this analysis strategy. In contrast, condition-dependent analyses typically utilize a smaller, defined set of treatments or conditions that have been chosen to test a particular hypothesis or offer insight into a specific physiological condition. Nonetheless, both condition independent and condition-dependent gene coexpression studies have utility. Analyses from large condition-independent data sets are likely to identify highly conserved core gene networks while smaller condition-dependent experiments offer the opportunity to recognize more narrowly defined correlations. </div>

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>From where are you planning to take the data? You shall require data to construct the network? What is the speciality of that database? Briefly explain the database.</div>
                    <div class="acc_content clearfix">We shall take the data from TENOR database, a database that encompasses large-scale mRNA sequencing (mRNA-Seq) data obtained from rice under a wide variety of conditions. Data in TENOR Database has been collected using mRNA-Seq and performing a time-course transcriptome analysis of rice, Oryza sativa L. (cv. Nipponbare), under 10 abiotic stress conditions (high salinity; high and low phosphate; high, low and extremely low cadmium; drought; osmotic; cold; and flood) and two plant hormone treatment conditions (ABA and jasmonic acid).<br>The main reason for choosing TENOR over the other databases is that all of the experiments, except for the stress and plant hormone treatments, were performed under the same laboratory conditions. <br>The following table shows the database content of TENOR Database:

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Condition</th>
                          <th>Tissue</th>
                          <th>Time Points</th>
                          <th>Read Lengths</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>High Salinity</td>
                          <td>Shoot/Tissue</td>
                          <td>0h, 1h</td>
                          <td>36</td>
                        </tr>
                        <tr>
                          <td>High Phosphate</td>
                          <td>Shoot/Tissue</td>
                          <td>0h,1d,5d,10d,10d + 1d recovery</td>
                          <td>51</td>
                        </tr>
                        <tr>
                          <td>Low Phosphate</td>
                          <td>Shoot/Tissue</td>
                          <td>0h,1d,5d,10d,10d + 1d recovery</td>
                          <td>51</td>
                        </tr>
                        <tr>
                          <td>High Cadmium</td>
                          <td>Shoot/Tissue</td>
                          <td>0h,1h, 12h, 1d, 5d</td>
                          <td>76</td>
                        </tr>
                        <tr>
                          <td>Low Cadmium</td>
                          <td>Shoot/Tissue</td>
                          <td>0h, 1d, 4d, 10d</td>
                          <td>76</td>
                        </tr>
                        <tr>
                          <td>Very Low Cadmium</td>
                          <td>Shoot/Tissue</td>
                          <td>0h, 1d, 4d, 10d</td>
                          <td>76</td>
                        </tr>
                        <tr>
                          <td>Cold</td>
                          <td>Shoot/Tissue</td>
                          <td>0h, 1h, 3h, 6h, 12h, 1d</td>
                          <td>76</td>
                        </tr>
                        <tr>
                          <td>Drought</td>
                          <td>Shoot/Tissue</td>
                          <td>0 h, 1 h, 3 h, 6 h, 12 h, 1 d</td>
                          <td>76</td>
                        </tr>
                        <tr>
                          <td>Osmotic</td>
                          <td>Shoot/Tissue</td>
                          <td>0 h, 1 h, 3 h, 6 h, 12 h</td>
                          <td>76</td>
                        </tr>
                        <tr>
                          <td>Flood</td>
                          <td>Shoot/Tissue</td>
                          <td>0 h, 1 h, 3 h, 6 h, 12 h</td>
                          <td>76</td>
                        </tr>
                        <tr>
                          <td>ABA</td>
                          <td>Shoot/Tissue</td>
                          <td>0 h, 1 h, 3 h, 6 h, 12 h, 1 d, 3 d</td>
                          <td>76</td>
                        </tr>
                        <tr>
                          <td>JA</td>
                          <td>Shoot/Tissue</td>
                          <td> 0 h, 1 h, 3 h, 6 h, 12 h, 1 d</td>
                          <td>76</td>
                        </tr>
                        <tr>
                          <td>No Treatment</td>
                          <td>Shoot/Tissue</td>
                          <td>0 h, 1 h, 3 h, 6 h, 12 h, 1 d, 3 d, 4 d, 5 d, 10 d</td>
                          <td>76</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Since TENOR contains m-RNA seq data, what is the major point of difference between microarray and RNA-seq data? Can you explain?</div>
                    <div class="acc_content clearfix">Co-expression networks can be constructed from gene expression data obtained from microarray or RNA-seq technology. , to gain a better understanding of the regulatory mechanisms driving biological processes, non-coding RNAs need to be considered in analyses.<br>RNA-seq also has other benefits. It increases accuracy for low-abundance transcripts, has a higher resolution for identifying tissue-specific expression and distinguishes expression profiles of closely related paralogues better than microarray-derived profiles. RNA-seq can also distinguish between the expression of different splice variants, which can have distinct interaction partners and biological functions. </div>

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can you please name a few other databases other than TENOR and briefly explain them?</div>
                    <div class="acc_content clearfix">The following table does a comparative study amongst various rice databases. 
                     <img  src="<?php echo base_url().'assets/images/table1.png';?>" alt="Search Image">
                     <img  src="<?php echo base_url().'assets/images/table2.png';?>" alt="Search Image">
                     <img  src="<?php echo base_url().'assets/images/table3.png';?>" alt="Search Image">
                     <img  src="<?php echo base_url().'assets/images/table4.png';?>" alt="Search Image">
                     <img  src="<?php echo base_url().'assets/images/table5.png';?>" alt="Search Image">
                     <img  src="<?php echo base_url().'assets/images/table6.png';?>" alt="Search Image">

                    </div>

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>How did you collect data from TENOR?</div>
                    <div class="acc_content clearfix">
                        <ul>
                        <li>Preprocessing of datasets is carried out using Cutadapt. Illumina adaptor sequences are trimmed. Low-quality bases (< Q15) at the 5’ and 3’ ends of the reads are trimmed. Finally reads shorter than 20bp after preprocessing are discarded. </li>
                        <li>Reads for each samples are then aligned to the rice reference genome(Os-Nipponbare-Reference-IRGSP-1.0) using HISAT2 and the gene annotation file from RAP-DB database.M files</li>
                        <li>Technical replicates are present for some files. BAM of those replicates are merged using Samtools.</li>
                        <li>Some datasets had very less number of reads aligned (Salinity and Cadmium stress) and are discarded for further analysis.</li>
                        </ul>
                    </div>

                   

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>How are you creating the co-expression network?</div>
                    <div class="acc_content clearfix"> 
                    There are various ways to find association between genes like Pearson, Spearman rank correlation, Hoeffding’s D measure, Theil-Sen, Rank Theil-Sen, Distance Variance, Kendall correlation and Weighted Rank. 
                    </div>

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can you explain a detail workflow of CD-Net?</div>
                    <div class="acc_content clearfix">
                     <img  src="<?php echo base_url().'assets/images/faq1.png';?>" alt="Search Image">
                        
                    </div>

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Is your co-expression Network going to be signed or unsigned? What is the difference between these two co-expression networks?</div>
                    <div class="acc_content clearfix">
                     Our co-expression network will be signed. <br>In a correlation-based co-expression network, correlation measures have values between 1 (perfect negative correlation) and 1 (perfect positive correlation). In an unsigned network, the absolute correlation values are used, which means that two negatively correlated genes will be considered as co-expressed. This causes negatively correlated genes to group together. Because those genes are likely to be also positively co-expressed with a completely different set of genes, these genes also group into the same module and disrupt the structure of the network. A signed network solves this problem by scaling the correlation values between 0 and 1 so that values < 0.5 indicate negative correlation and values >0.5 indicate positive correlation. A signed method creates networks where biologically meaningful modules (such as those representing a specific biological process) are better separated. Thus, a scaled value close to 0 indicates negative correlation, a feature which may be particularly interesting when microRNAs (miRNAs) are incorporated into the network, as these are known to exert their function mainly through down-regulation of other genes [38]. This also holds true for some long intergenic non-coding RNAs

                    </div>

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What about the network being weighted or unweighted?</div>
                    <div class="acc_content clearfix"> 
                    In a weighted network, all genes are connected to each other, and these connections have continuous weight values between 0 and 1 that indicate the strength of co-regulation between the genes. In an un-weighted network, the interaction between gene pairs is binary, i.e. either 0 or 1, and genes are either connected or unconnected. An un-weighted network can be created from a weighted network by, for example, considering all genes with a correlation above a certain threshold to be connected and all others unconnected. We focus on weighted networks in this review because (to date) they have produced more robust results than un-weighted  
                    </div>

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>How do you plan to do analysis of your co-expression network? Are there any pre-existing methods which you shall be trying?</div>
                    <div class="acc_content clearfix"> 
                    Generally there are two protocols for co-expression network analysis:
                    <ul>
                    <li>Guide-gene method</li>
                    <li>Non-target approach</li>
                    </ul>
                    The first category uses a ‘guide-gene’ approach (Fig. 2, left). Prior to correlation coefficient analysis, an appropriate set of genes relating to the biological problem is selected based on experimental knowledge and literature information. The pre-selected set of genes are termed ‘guide genes’.  In the first round of co-expression analysis, correlation coefficients between the guide genes (guide genes 1) are retrieved from a correlation coefficient data set calculated from gene expression data (e.g. microarray). Second step is finding co-expression modules within the guide genes, as well as correlation between the guide genes and all other genes, is expected. A set of correlated genes found in the first round of analysis can be combined with another set of guide genes (guide genes 2), and the combination used as the guide genes in the second round of analysis. In summary, using a guide-gene approach, one can expect to find genes that directly or indirectly correlate with the genes of interest.<br>The other category uses a ‘non-targeted’ approach. In this approach, a knowledge-independent module search of the entire network is performed based on the topology of the network. ‘Module’ can be defined as a group of densely connected nodes that have a sparsely connected periphery. Several algorithms can be used to extract such groups computationally.
                    </div>

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Can you differentiate between the guide-gene approach and the non-target approach?</div>
                    <div class="acc_content clearfix"> 
                    the guide-gene approach allows moderately sized analyses compared with the computationally-intensive non-target approach, it is appropriate for gene prioritization in a single-investigator study. However, we note a pitfall of this approach. As the guide-gene approach uses a pre-selected gene set, it cannot exclude the possibility that an expression module found by this approach may be part of a larger and more densely connected module. It is important to test whether connectivity within the module is higher than that to the outside. Practically, and most simply, this test can be done by searching the co-expression links of the module-member genes against all genes. 
                    </div>

                </div>

                

           

        </div>

    </div>

</section><!-- #content end -->