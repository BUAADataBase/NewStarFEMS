<p align="center"><span style="font-family: 黑体; font-size: 18pt">浅谈结构化方法与面向对象方法</span></p>
<p><span style="font-size: 14pt; font-family: 黑体">一． 引言</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp; 在软件开发过程中，有很多不同的软件开发方法。选取合适的软件开发方法，对于软件开发的过程和结果有着非常重要的影响。我们知道自软件工程发展以来诞生了很多不同的软件开发方法，例如具有代表性的结构化方法、面向对象方法，以及其他的原型法、面向数据结构的Jackson方法、基于模型的VDM方法等。而结构化方法和面向对象方法在软件开发过程中的应用是最广泛的，因而了解两者的区别与联系，并将两者更好的结合是长期以来软件开发人员津津乐道的话题。所以我们今天来探讨一下结构化方法与面向对象方法之间的一些区别与联系。</span></p>
<p><span style="font-size: 14pt; font-family: 黑体">二． 结构化软件开发方法</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp; 结构化软件开发方法是一类早期的传统的软件开发方法，它的基本思想是将软件基于功能进行分解并抽象，形成系统化的模块结构，从而针对每个模块进行结构化的设计以及结构化的编程，进而完成整个系统的开发。整个方法通过把一个复杂的系统分解成稍微简单的各个模块进行处理，将复杂的问题简单化，从而高效地完成开发工作。</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp; 结构化软件开发方法由三大部分组成，分别为结构化分析、结构化设计以及结构化程序设计。</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;结构化分析是一种面向数据流的系统分析方法。我们可以通过数据流图、数据词典、判定表、判定树或者实体关系图等，对数据流进行详细的分析。常用的分析手段是数据流图以及实体关系图，前者通过系统的分层建立系统逻辑的模型，而后者则是后端数据库设计的基础。我们以数据流图为例，数据流图的核心思想就是分层，通过层次逐渐体现系统的逻辑功能。整个的总体思想就是先确定系统与系统涉及到的外部实体之间的数据流，然后在此基础上分析系统的主要功能，从而抽象出系统的加工模块，实现数据流的分层。</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;下面我们通过一个简单的例子看看数据流分析的整个过程。比如我们需要开发一个一对一家教平台，我们首先需要对该系统进行需求分析，分析结果如下：</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;1.用户（老师或学生）填写相关用户信息，并注册</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;2.系统检查用户信息是否符合规范，如果符合要求，则数据入库并分配用户ID，注册成功</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;3.为学生提供老师的信息，为老师提供学生的信息</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;4.学生选择某个老师的某一节课，系统将两者进行匹配，在付款完毕之后数据入库</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;5.系统根据学生和老师输入的空闲时间和上课频率安排课表，并反馈给老师和学生</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;6.在上课完毕后学生在系统上对老师进行评价，老师对学生进行评价</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;我们发现在该系统内涉及到了三个实体，分别为学生、老师以及系统管理员，而数据流则包括了老师和学生的个人信息、学生的选课信息、学生和老师的评价等。数据加工则是用户信息的管理以及选课表的管理还有评价单的管理，数据存储则包括了学生名单、老师名单、课表、评价单、选课单等。所以我们可以就很方便的画出其数据流图。</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;结构化设计也是结构化方法的重要组成部分，它在结构化分析的基础上，映射分析模型到设计模型，从而得到系统的模块结构、数据库结构等结构。事实上系统的模块结构是在数据流图的基础上，进行相应的变换分析和事务分析而得到的。 当映射过程中只涉及到变换分析而不涉及事务分析时，设计出来的模块必须满足高独立性的要求。</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;在结构化设计阶段之后则是结构化程序设计阶段，这一阶段目标相对明确，即根据 设计的每一个模块结构进行相应的代码实现，通过分析每个模块内部的逻辑结构，设计出每个模块的代码框架以及内部实现，是三个阶段中最不抽象的阶段。</span></p>
<p><span style="font-size: 14pt; font-family: 黑体">三． 面向对象软件开发方法</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;面向对象的开发方法发展与一些面向对象语言的出现（比如C++和JAVA）有着很大的联系，在当前的软件行业中，越来越多的人使用JAVA、PHP、C#等语言进行开发工作，这表明了面向对象的开发方法已经占领了软件开发的绝大部分领域，而面向对象的根本就是建模。</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;面向对象与结构化的开发方法一样，分为三个部分，分别是面向对象的分析，面向对象的设计，以及面向对象的程序设计。在面向对象的方法中，UML是很重要的一部分，它涵盖了从面向对象分析到设计再到程序设计的方方面面，通过UML建模可以系统的分析所要涉及的系统的整体模型以及各个模块的设计。事实上面向对象的思想就是把现实中存在的人、物、事抽象成一个又一个的类，通过属性和方法的交互完成各种功能，这个模型建立的过程融合了分析和设计，并且良好的封装很好地缩小了编码的难度，给软件开发的工作从思想到实现都带来的质的提升。</span></p>
<p><span style="font-size: 14pt; font-family: 黑体">四． 结构化与面向对象的对比</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;结构化方法与面向对象方法都是很经典的开发方法，很难说哪种方法更好，只能说哪种方法更适合什么样的开发，这叫做“对症下药”。</span></p>
<p><span style="font-size: 16px">结构化方法基于功能的分解和抽象，因而建立出来的模型比较简单直观，并且可读性较好，它能够将一个较大较复杂的系统分解成为多个独立的小模块来实现，不仅有利于客户和开发人员之间的交流，并且有效地提高了软件开发的质量。另外一方面，我们考虑到计算机行业和软件工程的特殊性，更新换代快，灵活多变是整个行业的特点，所以需求的变化是不可避免的。但是频繁的需求变化带来的问题就是底层模块会受到很大的影响，一个很小的需求变化都有可能带来整个系统从底层开始的巨大的重构。所以结构化的方法在维护层面较为薄弱，会不断地处于需求变化-&gt;重新进行结构化分析-&gt;修改模块-&gt;软件重构-&gt;需求变化的循环中。</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;面向对象方法主要基于对象之间的交互，是以数据为中心而构建的系统。数据相对于功能来说，具有更好的稳定性，所以面向对象方法在面对需求变化的时候可以很自然的面对，能够很轻易地进行系统的维护以及代码的重用工作。而面向对象方法的缺点也很明显，那就是它不适用于一些大型系统的开发，因为大型系统的规模较大，如果在整个开发过程中没有一些明确的模块的划分，就会带来系统结构划分不合理，建立模型过于复杂等问题。并且对于客户来说，要去理解UML中的建模情况以及类图中各个类之间的关系是很困难的，这在一定程度上就增大了开发人员与客户沟通的难度，对于开发工作并不是一个很好的现象。</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;我们可以通过下面的表格具体看一看这两种开发方法在一些方面的表现有哪些不同：</span></p>
<div align="center">
<table border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td width="184">
<p align="center"><span style="font-size: 16px">&nbsp;</span></p>
</td>
<td width="184">
<p align="center"><span style="font-size: 16px">结构化方法</span></p>
</td>
<td width="184">
<p align="center"><span style="font-size: 16px">面向对象方法</span></p>
</td>
</tr>
<tr>
<td width="184">
<p align="center"><span style="font-size: 16px">执行效率</span></p>
</td>
<td width="184">
<p align="center"><span style="font-size: 16px">产生的可执行代码较为直接、高效，系统运行效率高</span></p>
</td>
<td width="184">
<p align="center"><span style="font-size: 16px">产生的可执行代码较为复杂，大型系统的执行效率较低</span></p>
</td>
</tr>
<tr>
<td width="184">
<p align="center"><span style="font-size: 16px">重用性</span></p>
</td>
<td width="184">
<p align="center"><span style="font-size: 16px">难以修改和扩充，当系统对外接口发生变化时，系统结构会发生很大的改动。</span></p>
</td>
<td width="184">
<p align="center"><span style="font-size: 16px">数据和操作相结合，在遇见类似的问题时可以通过继承、抽象等机制重用代码。</span></p>
</td>
</tr>
<tr>
<td width="184">
<p align="center"><span style="font-size: 16px">编译过程</span></p>
</td>
<td width="184">
<p align="center"><span style="font-size: 16px">结构化方法产生的代码直接进行编译运行。</span></p>
</td>
<td width="184">
<p align="center"><span style="font-size: 16px">面向对象方法产生的代码需要经过编译器编译为结构化的代码后进一步运行。</span></p>
</td>
</tr>
<tr>
<td width="184">
<p align="center"><span style="font-size: 16px">难度</span></p>
</td>
<td width="184">
<p align="center"><span style="font-size: 16px">结构化方法较为简单，构建方式也易于理解。</span></p>
</td>
<td width="184">
<p align="center"><span style="font-size: 16px">面向对象方法涵盖的内容广，方面多，常常需要一种支持的分析，设计方法。</span></p>
</td>
</tr>
<tr>
<td width="184">
<p align="center"><span style="font-size: 16px">应用范围</span></p>
</td>
<td width="184">
<p align="center"><span style="font-size: 16px">适用于数据少而操作多的问题，例如操作系统这种以功能为主的系统。</span></p>
</td>
<td width="184">
<p align="center"><span style="font-size: 16px">适用于以数据为主而操作较少的系统，比如数据库或者数据管理系统。</span></p>
</td>
</tr>
</tbody>
</table>
</div>
<p><span style="font-size: 16px">&nbsp;</span></p>
<p><span style="font-size: 14pt; font-family: 黑体">五． 结构化与面向对象的结合</span></p>
<p><span style="font-size: 16px">&nbsp; &nbsp; &nbsp;&nbsp;我们直观上去理解结构化方法和面向对象方法，会发现结构化方法面向过程，更接近于将需求在计算机物理层面客观实现；而面向对象方法更加符合人们的认识习惯。所以在实际的开发过程中，我们可以将二者结合，采用将两者综合的程序设计方法，比如在分析和设计的阶段使用结构化的分析和设计方法，进一步生成软件的结构图。然后通过一些转换的手法获得面向对象编码所需要的控件，最后使用面向对象的编码方式完成整个程序的设计。这样既结合了结构化方法在分析和设计中节省时间，减少错误，简化问题的特点，又保证了程序设计的高交互性与高重用性，并且使得软件的适应性也得到了很大的提升，实现双赢的效果。</span></p>