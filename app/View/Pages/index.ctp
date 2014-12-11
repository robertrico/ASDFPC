<div class="col-md-12">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" style="font-size:250%;">Robert Rico</h3>
                <small>Computer Science Major at California State University, Sacramento</small>
            </div>
            <div class="panel-body">
                <p>Welcome to ASDFPC.COM, my online Web Design/Development and Computer Science Portfolio!</p>
                <p>Here I will post my school projects, side projects, and anything else I feel pertinent to computer science and my abilities.</p>   
           </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Web Development</h3>
            </div>
        <div class="panel-body">
           <p>I am currently working as a Intern Web Developer for a company in Sacramento. I am gaining knowledge exponentially and applying all that I learn from the internship everyday. I was able to juggle a 25+ hour work week while taking Calculus in an 8-week course. I obtained a B in the summer course.</p>
           <p>Some of my work is displayed in the above links.</p>
           <p>Currently the Company I work for is developing a marketing application. I do a lot of the backend logic.</p>
        </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Java Programming:</h3>
                <small>(If your browser force downloads, you can open with your web-browser to view text)</small>
            </div>
            <div class="panel-body">
                <p> Second Year Programs </p>
                    <!-- Dictionary trigger modal -->
                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
                        Discrete Structures Dictionary
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Dictionary</h4>
                          </div>
                          <div class="modal-body">
                             <p>To better understand and practice not only programming, but my Discrete Structures/Mathematics, I created a Console based dictionary.</p>
                             <p>It reads in files from a custom .ref file, and is robust and able to read any correctly formatted wordbank file. Can be used for any subject requiring definitions.</p>
                             <p>Includes a help function that provides information on available functions to the user.</p>
                                <ul>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/Dictionary/DictionaryMain.java">Main Class</a></li>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/Dictionary/Dictionary.java">Dictionary Object</a></li>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/Dictionary/Definitions.java">Definitions Object</a></li>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/Dictionary/DiscreteMath.ref">Discrete Structures Definitions</a></li>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/Dictionary/help.ref">Help Function File</a></li>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/Dictionary/test.ref">Test Wordbank to mimic</a></li>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/Dictionary/readme.md">Read Me</a></li>
                                </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="pull-left btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- BinConv trigger modal -->
                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal2">
                        Binary to Decimal Converter
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Converter</h4>
                          </div>
                          <div class="modal-body">
                             <p>For my Computer Archtecture class, it was pertitent that we learn to convert binary, hex, and decimal in between one another.</p>
                             <p>In order to better understand, I wrote a simple conversion from a 16-bit binary integer, into a decimal integer.</p>
                             <p>I also implemented a hex to decimal integer conversion, as well as the choice for the user between the two.</p>
                                <ul>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/Converter/CompArc.java">Main Class</a></li></br>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/Converter/BinaryToDecimal.java">Binary to Decimal Object</a></li></br>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/Converter/HexToDecimal.java">Hex to Decimal Object</a></li></br>
                                </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="pull-left btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <br>
                    <!-- Statistics trigger modal -->
                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal3">
                        Hiearchy, Comparable, and Interface
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Inheritance, and Interface</h4>
                          </div>
                          <div class="modal-body">
                             <p>For my Programming Logic and Methodology II, I wrote a program that contained different type of Library items, and constructed them from a file.<br/></p>
                             <p>The program uses and implements, interfacing, comparability, and hiearchy and inheritance.<br/></p>
                                <ul>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/LibraryItems/Library.java">Main Class</a></li></br>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/LibraryItems/LibraryItem.java">Library Object</a></li></br>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/LibraryItems/DVDItem.java">DVD Object, Child of Library Object</a></li></br>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/LibraryItems/BookItem.java">Book Object, Child of Library Object</a></li></br>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/LibraryItems/database.txt">Database File</a></li></br>
                                </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="pull-left btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Cards trigger modal -->
                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal4">
                        Twenty-One Game
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Inheritance, and Interface</h4>
                          </div>
                          <div class="modal-body">
                             <p>For this Project, I made a simple terminal based 21 card game<br/></p>
                                <ul>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/Cards/">Twenty One</a></li></br>
                                </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="pull-left btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Cards trigger modal -->
                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal4">
                        Infix To Postfix
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Inheritance, and Interface</h4>
                          </div>
                          <div class="modal-body">
                             <p>In another project, I created an infix to postfix converter, and then a postfix evaluator<br/></p>
                                <ul>
                                  <li><a href="<?php echo $this->webroot; ?>files/sWareEx/Fix/">Infix to Postfix</a></li></br>
                                </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="pull-left btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <br>
                    <br>
                    <p> Elementary First Year Programs </p>
                    <!-- Statistics trigger modal -->
                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal4">
                        Statistics Calculator
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Statistics Calculator</h4>
                          </div>
                          <div class="modal-body">
                             <p>For my Programming Logic and Methodology I Class, we were required to create a program that calculated statistics on 1,000 numbers.</p>
                                <ul>
                              <li><a href="<?php echo $this->webroot; ?>files/sWareEx/fileCalc.java">Main Class</a></li>
                              <li><a href="<?php echo $this->webroot; ?>files/sWareEx/InputCalc.java">InputCalc Class</a></li></br>
                            </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="pull-left btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Guessing trigger modal -->
                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal5">
                        Guessing Game
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Guessing Game</h4>
                          </div>
                          <div class="modal-body">
                             <p>Another program required by Programming Logic and Methodology I was a program designed to guess a number that the user was thinking.</p>
                                <ul>
                              <li><a href="<?php echo $this->webroot; ?>files/sWareEx/guessGame.java">Main Class</a></li></br>
                            </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="pull-left btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Statistics trigger modal -->
                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal6">
                        Java Graphics
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Java Graphics</h4>
                          </div>
                          <div class="modal-body">
                             <p>For my Programming Logic and Methodology I, I created a very basic visual graphics assortment.<br/></p>
                            <ul>
                              <li><a href="<?php echo $this->webroot; ?>files/sWareEx/javaGrafix.java">Main Class</a></li></br>
                            </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="pull-left btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 pull-right">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">ANSI-C Programming</h3>
            </div>
        <div class="panel-body">
           <p>In my spare time I am working towards learning ANSI-C. I am very interested in this programming language, and my goal is to be able to become fluent in this language.</p>
            <!-- Assembly trigger modal -->
                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal8">
                        ANSI-C Language Work
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">ANSI-C</h4>
                          </div>
                          <div class="modal-body">
                             <p>Here is the collection of the C files I have written.<br/></p>
                            <ul>
                              <li><a href="<?php echo $this->webroot; ?>files/sWareEx/C">C List</a></li></br>
                            </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="pull-left btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>


        </div>
        </div>
    </div>
    <div class="col-md-6 pull-right">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">MASM 16-Bit Assembly Language</h3>
            </div>
        <div class="panel-body">
           <p>For My Introduction to Computer Architecture, I have created small calculation problems, as well as a Matrix-Esque Screen saver</p>
            <!-- Assembly trigger modal -->
                    <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal7">
                        Assembly Language Work
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Assembly Language</h4>
                          </div>
                          <div class="modal-body">
                             <p>Here is the collection of the ASM files I have written this semester.<br/></p>
                            <ul>
                              <li><a href="<?php echo $this->webroot; ?>files/sWareEx/Assembly">ASM List</a></li></br>
                            </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="pull-left btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

        </div>
        </div>
    </div>
</div>
        
      


