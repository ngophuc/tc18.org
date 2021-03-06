
<?php include("header1.html") ?>

<div id="site_content">


<h3>File format</h3>
We have chosen a simple file format to encode 3D images. The format has
".vol" extensions and we have developped a complete library to create
and to handle this kind of images (see <a href="http://liris.cnrs.fr/david.coeurjolly/Code/SimpleVol/">libvol</a>
in the code section, a tutorial is available). Basically, the format
contained a ASCII text header then a byte matrix to encode both binary
and grayscale images. <br>
<br>
Tools associated to "vol" files are given in the <a href="code.php">Code
section</a> (libvol, volgen, volcompose, raw2vol, vol2raw,
vol2geom...).
<br>
Other 3D "vol" volumes generated from meshes using binvox and at various
resolutions are available on this <a href="https://github.com/dcoeurjo/VolGallery">github repository</a> (many thanks to
David Coeurjolly).  

<h3>3-D images</h3>
<table border="1">
  <tbody>
    <tr>
      <td bgcolor="#ffff9c">Type</td>
      <td bgcolor="#ffff9c">description</td>
      <td bgcolor="#ffff9c"> File format</td>
      <td bgcolor="#ffff9c">Download</td>
      <td bgcolor="#ffff9c">Snapshots</td>
      <td bgcolor="#ffff9c">submitted by or courtesy</td>
    </tr>
    <tr>
      <td><font color="green">3D Binary images</font></td>
      <td>Catenoid (c=20) from <a href="http://liris.cnrs.fr/david.coeurjolly/Code/SimpleVol/">SimpleVol/volgen</a> </td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/catenoid.vol.gz">here</a></td>
      <td><img src="3D_binary/catenoid.gif"></td>
      <td>A. Guillaume</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td>Sphere from <a href="http://liris.cnrs.fr/david.coeurjolly/Code/SimpleVol/">SimpleVol/volgen</a> </td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/sphere.vol.gz">here</a></td>
      <td><img src="3D_binary/sphere.gif"></td>
      <td>A. Guillaume</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td>Ellipsoid from <a href="http://liris.cnrs.fr/david.coeurjolly/Code/SimpleVol/">SimpleVol/volgen</a> </td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/ellipsoid.vol.gz">here</a></td>
      <td><img src="3D_binary/ellipsoid.gif"></td>
      <td>A. Guillaume</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td> Cube from <a href="http://liris.cnrs.fr/david.coeurjolly/Code/SimpleVol/">SimpleVol/volgen</a> </td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/cube45.vol.gz">here</a></td>
      <td><img src="3D_binary/cube45.gif"></td>
      <td>A. Guillaume</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td> Rounded cube from <a href="http://liris.cnrs.fr/david.coeurjolly/Code/SimpleVol/">SimpleVol/volgen</a> </td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/rounded-cube45.vol.gz">here</a></td>
      <td><img src="3D_binary/rounded-cube45.gif"></td>
      <td>A. Guillaume</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td>Torus from <a href="http://liris.cnrs.fr/david.coeurjolly/Code/SimpleVol/">SimpleVol/volgen</a> </td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/torus.vol.gz">here</a></td>
      <td><img src="3D_binary/torus.gif"></td>
      <td>A. Guillaume</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td>Klette's ellipsoid from <a href="http://liris.cnrs.fr/david.coeurjolly/Code/SimpleVol/">SimpleVol/volgen</a>,
this figure was proposed in <a
 href="Bibliography/tc18_bib.html#KLETTE_2001">[KLETTE 2001]</a> to
test surface area estimator</td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/klette-ellipsoid.vol.gz">here</a></td>
      <td><img src="3D_binary/klette.gif"></td>
      <td>A. Guillaume</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td> Composition from <a href="http://liris.cnrs.fr/david.coeurjolly/Code/SimpleVol/">SimpleVol/volcompose</a> </td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/composition.vol.gz">here</a></td>
      <td><img src="3D_binary/composition.gif"></td>
      <td>A. Guillaume</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td> Alphabet "A"(20 voxel thickness) </td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/a.vol.gz">here</a></td>
      <td><img src="3D_binary/a.gif" height="96" width="96"></td>
      <td>A. Imiya, D. Coeurjolly</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td> Three rectangular solids(30 * 30 * 90 voxel) intersect each
other </td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/cross.vol.gz">here</a></td>
      <td><img src="3D_binary/cross.gif" height="96" width="96"></td>
      <td>A. Imiya, D. Coeurjolly</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td>Two rectangular solids (20 * 20 * 90 voxel) are connected by
a rectangular solid (10 * 10 * 40 v
oxel) at the bottom of two solids </td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/h.vol.gz">here</a></td>
      <td><img src="3D_binary/h.gif" height="96" width="96"></td>
      <td>A. Imiya, D. Coeurjolly</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td>Two rectangular solids (20 * 20 * 90 voxel) are connected by
a rectangular solid (10 * 10 * 40 v
oxel) </td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/h_bottom.vol.gz">here</a></td>
      <td><img src="3D_binary/h_bottom.gif" height="96" width="96"></td>
      <td>A. Imiya, D. Coeurjolly</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td>A cube (40 * 40 * 40 voxel) with a hole (20 * 20 * 40 voxel)</td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/cube_hole.vol.gz">here</a></td>
      <td><img src="3D_binary/cube_hole.gif" height="96" width="96"></td>
      <td>A. Imiya, D. Coeurjolly</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td>A rectangular solid (20 * 20 * 80 voxel) connects with
rectangular solid (20 * 20 * 60 voxel)</td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/t.vol.gz">here</a></td>
      <td><img src="3D_binary/t.gif" height="96" width="96"></td>
      <td>A. Imiya, D. Coeurjolly</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td>A rectangular solid (20 * 20 * 80 voxel) connects with
rectangular solid (10 * 10 * 60 voxel)</td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/t_d.vol.gz">here</a></td>
      <td><img src="3D_binary/t_d.gif" height="96" width="96"></td>
      <td>A. Imiya, D. Coeurjolly</td>
    </tr>
    <tr>
      <td><font color="green">&nbsp;</font></td>
      <td>A window model is built by rectangular solids (10 * 10 * 90
voxel)</td>
      <td>VOL.GZ</td>
      <td><a href="3D_binary/window.vol.gz">here</a></td>
      <td><img src="3D_binary/window.gif" height="96" width="96"></td>
      <td>A. Imiya, D. Coeurjolly</td>
    </tr>
    <tr>
      <td style="vertical-align: top;"><br>
      </td>
      <td style="vertical-align: middle;">An old car in 9 different
resolutions ranging from 50<sup>3</sup>
to 450<sup>3</sup>. Caution: uncompressing this archive&nbsp; creates
files with a total size of about 250 MB.<br>
      </td>
      <td style="vertical-align: middle;">many .VOL inside a .TAR.GZ<br>
      </td>
      <td style="vertical-align: middle;"><a
 href="3D_binary/32dodge.tar.gz">here<br>
      </a></td>
      <td style="vertical-align: middle;"><img
 style="width: 96px; height: 96px;" alt="" src="3D_binary/32dodge.png"><br>
      </td>
      <td style="vertical-align: middle;">E. Remy<br>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;"><br>
      </td>
      <td style="vertical-align: middle;">"Al (Capone?)" in 9 different
resolutions ranging from 50<sup>3</sup>
to 450<sup>3</sup>. Caution: uncompressing this archive&nbsp; creates
files with a total size of about 250 MB.</td>
      <td style="vertical-align: middle;">many .VOL inside a .TAR.GZ</td>
      <td style="vertical-align: middle;"><a href="3D_binary/Al.tar.gz">here</a><br>
      </td>
      <td style="vertical-align: middle;"><img
 style="width: 96px; height: 96px;" alt="" src="3D_binary/Al.png"><br>
      </td>
      <td style="vertical-align: middle;">E. Remy</td>
    </tr>
    <tr>
      <td style="vertical-align: top;"><br>
      </td>
      <td style="vertical-align: middle;">An alien from <span
 style="font-style: italic;">Starship Troopers</span> in 9 different
resolutions ranging from 50<sup>3</sup>
to 450<sup>3</sup>. Caution: uncompressing this archive&nbsp; creates
files with a total size of about 250 MB.</td>
      <td style="vertical-align: middle;">many .VOL inside a .TAR.GZ</td>
      <td style="vertical-align: middle;"><a
 href="3D_binary/ArachnidWarrior.tar.gz">here</a><br>
      </td>
      <td style="vertical-align: middle;"><img
 style="width: 96px; height: 96px;" alt=""
 src="3D_binary/ArachnidWarrior.png"><br>
      </td>
      <td style="vertical-align: middle;">E. Remy</td>
    </tr>
    <tr>
      <td style="vertical-align: top;"><br>
      </td>
      <td style="vertical-align: middle;">A
Republic Cruiser from <span style="font-style: italic;">Star Wars</span>
in 9 different resolutions ranging from 50<sup>3</sup>
to 450<sup>3</sup>. Caution: uncompressing this archive&nbsp; creates
files with a total size of about 250 MB.</td>
      <td style="vertical-align: middle;">many .VOL inside a .TAR.GZ</td>
      <td style="vertical-align: middle;"><a
 href="3D_binary/RepublicCruiser.tar.gz">here</a><br>
      </td>
      <td style="vertical-align: middle;"><img
 style="width: 96px; height: 96px;" alt=""
 src="3D_binary/RepublicCruiser.png"><br>
      </td>
      <td style="vertical-align: middle;">E. Remy</td>
    </tr>
    <tr>
      <td><font color="green">3D Grayscale images</font></td>
      <td><i>The raw files presented below are completely compatible
with the VOL format (use raw2vol in the <a
 href="Code/Voltools/index.html">Voltools</a> to convert them). The vol
files are compressed using the bzip2 program, which is freely available
from the Internet.<br>
Grayscale images orginally come from <a href="http://volvis.org">http://volvis.org/</a></i>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Aneurism</b><br>
      <br>
256x256x256<br>
1:1:1</center>
Rotational b-plane x-ray scan of the arteries of the right half of a
human head. A contrast agent was injected into the blood and an
aneurism is present.</td>
      <td>RAW.GZ<br>
or<br>
VOL.BZ2<br>
      </td>
      <td><a href="./3D_greyscale/aneurism.raw.gz">raw.gz</a> or <a
 href="./3D_greyscale/aneurism.vol.bz2">vol.bz2<br>
      </a></td>
      <td><img src="./3D_greyscale/aneurism.jpg" alt="aneurism.jpg"
 width="96"></td>
      <td><a href="http://www.philips.de/forschung/indexns4.html">Philips
Research</a>, Hamburg, Germany.
      </td>
    </tr>
<!-----------------------------------------------------------------><!--!-->
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Boston Teapot</b><br>
      <br>
256x256x178<br>
1:1:1</center>
CT scan of the SIGGRAPH 1989 teapot with a small version of the AVS
lobster inside.</td>
      <td>RAW.GZ <br>
or<br>
VOL.BZ2</td>
      <td><a href="./3D_greyscale/BostonTeapot.raw.gz">raw.gz</a> or <a
 href="3D_greyscale/BostonTeapot.vol.bz2">vol.bz2</a></td>
      <td><img src="./3D_greyscale/BostonTeapot.jpg"
 alt="BostonTeapot.jpg" width="96"></td>
      <td><a href="http://www.terarecon.com">Terarecon Inc</a>, <a
 href="http://www.merl.com">MERL</a>, <a
 href="http://www.brighamandwomens.com">Brigham and Women's Hospital</a>.
<!-----------------------------------------------------------------><!--!-->
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Bonsai</b><br>
      <br>
256x256x256<br>
1:1:1</center>
CT scan of a bonsai tree.
      </td>
      <td>RAW.GZ <br>
or<br>
VOL.BZ2</td>
      <td><a href="./3D_greyscale/bonsai.raw.gz">raw.gz</a> or <a
 href="3D_greyscale/bonsai.vol.bz2">vol.bz2</a></td>
      <td><img src="./3D_greyscale/bonsai.jpg" alt="bonsai.jpg"
 width="96"></td>
      <td>S. Roettger, <a
 href="http://wwwvis.informatik.uni-stuttgart.de/">VIS</a>, University
of Stuttgart.
<!-----------------------------------------------------------------><!--!--></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Engine</b><br>
      <br>
256x256x128<br>
1:1:1</center>
CT scan of two cylinders of an engine block.
      </td>
      <td>RAW.GZ <br>
or<br>
VOL.BZ2</td>
      <td><a href="3D_greyscale/engine.raw.gz">raw.gz</a> or <a
 href="3D_greyscale/engine.vol.bz2">vol.bz2</a><span
 style="text-decoration: underline;"><br>
      </span></td>
      <td><img src="./3D_greyscale/engine.jpg" alt="engine.jpg"
 width="96"></td>
      <td>General Electric
<!-----------------------------------------------------------------><!--!--></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Foot</b><br>
      <br>
256x256x256<br>
1:1:1</center>
Rotational b-plane x-ray scan of a human foot. Tissue and bone
are present in the dataset.
      </td>
      <td>RAW.GZ <br>
or<br>
VOL.BZ2</td>
      <td><a href="./3D_greyscale/foot.raw.gz">raw.gz</a> or <a
 href="3D_greyscale/foot.vol.bz2">vol.bz2</a></td>
      <td><img src="./3D_greyscale/foot.jpg" alt="foot.jpg" width="96"></td>
      <td><a href="http://www.philips.de/forschung/indexns4.html">Philips
Research</a>, Hamburg, Germany.
<!-----------------------------------------------------------------><!--!--></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Fuel</b><br>
      <br>
64x64x64<br>
(1:1:1)</center>
Simulation of fuel injection into a combustion chamber. The higher the
density value, the less presence of air.
      </td>
      <td>RAW.GZ <br>
or<br>
VOL.BZ2</td>
      <td><a href="./3D_greyscale/fuel.raw.gz">raw.gz</a> or <a
 href="./3D_greyscale/fuel.vol.bz2">vol.bz2<br>
      </a></td>
      <td><img src="./3D_greyscale/fuel.jpg" alt="fuel.jpg" width="96"></td>
      <td><a href="http://www.uni-tuebingen.de/uni/opx/">SFB 382</a> of
the German Research Council (<a href="http://www.dfg.de/">DFG</a>).
<!-----------------------------------------------------------------><!--!--></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Hydrogen Atom</b><br>
      <br>
128x128x128<br>
(1:1:1)</center>
Simulation of the spatial probability distribution of the electron in
an hydrogen atom, residing in a strong magnetic field (<a
 href="http://www.hlrs.de/people/niemeier/SciVi1.html">more</a>).
      </td>
      <td>RAW.GZ <br>
or<br>
VOL.BZ2</td>
      <td><a href="./3D_greyscale/hydrogenAtom.raw.gz">raw.gz</a> or <a
 href="./3D_greyscale/hydrogenAtom.vol.bz2">vol.bz2<br>
      </a></td>
      <td><img src="./3D_greyscale/hydrogenAtom.jpg"
 alt="hydrogenAtom.jpg" width="96"></td>
      <td><a href="http://www.uni-tuebingen.de/uni/opx/">SFB 382</a> of
the German Research Council (<a href="http://www.dfg.de/">DFG</a>).
<!-----------------------------------------------------------------><!--!--></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Leg of Statue</b><br>
      <br>
341x341x93<br>
(1:1:4)</center>
CT scan of a leg of a bronze statue.
      </td>
      <td>RAW.GZ <br>
or<br>
VOL.BZ2</td>
      <td><a href="./3D_greyscale/statueLeg.raw.gz">raw.gz</a> or <a
 href="./3D_greyscale/statueLeg.vol.bz2">vol.bz2<br>
      </a></td>
      <td><img src="./3D_greyscale/statueLeg.jpg" alt="statueLeg.jpg"
 width="96"></td>
      <td>German federal institution for material research and testing (<a
 href="http://www.bam.de/">BAM</a>), Berlin, Germany.
<!-----------------------------------------------------------------><!--!--></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Lobster</b><br>
      <br>
301x324x56<br>
(1:1:1.4)</center>
CT scan of a lobster contained in a block of resin.
      </td>
      <td>RAW.GZ <br>
or<br>
VOL.BZ2</td>
      <td><a href="./3D_greyscale/lobster.raw.gz">raw.gz</a> or <a
 href="./3D_greyscale/lobster.vol.bz2">vol.bz2<br>
      </a></td>
      <td><img src="./3D_greyscale/lobster.jpg" alt="lobster.jpg"
 width="96"></td>
      <td><a href="http://www.cs.sunysb.edu/%7Evislab/start_volvis.html">VolVis
distribution</a> of SUNY Stony Brook, NY, USA.
<!-----------------------------------------------------------------><!--!--></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Marschner/Lobb</b><br>
      <br>
41x41x41<br>
(1:1:1)</center>
High frequencies where 99% of the sinusoids are right below the Nyquist
frequency.
      </td>
      <td>RAW.GZ <br>
or<br>
VOL.BZ2</td>
      <td><a href="./3D_greyscale/marschnerlobb.raw.gz">raw.gz</a> or <a
 href="./3D_greyscale/marschnerlobb.vol.bz2">vol.b</a><a
 href="./3D_greyscale/marschnerlobb.vol.bz2">z2<br>
      </a></td>
      <td><img src="./3D_greyscale/marschnerlobb.jpg"
 alt="marschnerlobb.jpg" width="96"></td>
      <td><a href="http://graphics.stanford.edu/%7Esrm/">Marschner</a>
and <a href="http://www.cs.auckland.ac.nz/%7Erichard/">Lobb</a>.
<!-----------------------------------------------------------------><!--!--></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Neghip</b><br>
      <br>
64x64x64<br>
(1:1:1)</center>
Simulation of the spatial probability distribution of the electrons in
a high potential protein molecule.
      </td>
      <td>RAW.GZ <br>
or<br>
VOL.BZ2</td>
      <td><a href="./3D_greyscale/neghip.raw.gz">raw.gz</a> or <a
 href="./3D_greyscale/neghip.vol.bz2">vol.bz2</a></td>
      <td><img src="./3D_greyscale/neghip.jpg" alt="neghip.jpg"
 width="96"></td>
      <td><a href="http://www.cs.sunysb.edu/%7Evislab/start_volvis.html">VolVis
distribution</a> of SUNY Stony Brook, NY, USA.
<!-----------------------------------------------------------------><!--!--></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Nucleon</b><br>
      <br>
41x41x41<br>
(1:1:1)</center>
Simulation of the two-body distribution probability of a nucleon in the
atomic nucleus 16O if a second nucleon is known to be positioned at
r'=(2 fm,0,0).
      </td>
      <td>RAW.GZ <br>
or<br>
VOL.BZ2</td>
      <td><a href="./3D_greyscale/nucleon.raw.gz">raw.gz</a> or <a
 href="./3D_greyscale/nucleon.vol.bz2">vol.bz2<br>
      </a></td>
      <td><img src="./3D_greyscale/nucleon.jpg" alt="nucleon.jpg"
 width="96"></td>
      <td><a href="http://www.uni-tuebingen.de/uni/opx/">SFB 382</a> of
the German Research Council (<a href="http://www.dfg.de/">DFG</a>).
<!-----------------------------------------------------------------><!--!--></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Shockwave</b><br>
      <br>
64x64x512<br>
1:1:1</center>
TBD
      </td>
      <td>RAW.GZ <br>
or<br>
VOL.BZ2</td>
      <td><a href="./3D_greyscale/shockwave.raw.gz">raw.gz</a> or <a
 href="./3D_greyscale/shockwave.vol.bz2">vol.bz2</a></td>
      <td><img src="./3D_greyscale/shockwave.jpg" alt="shockwave.jpg"
 width="96"></td>
      <td>TBD.
<!-----------------------------------------------------------------><!--!--></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Silicium</b><br>
      <br>
98x34x34<br>
(1:1:1)</center>
Simulation of a silicium grid.
      </td>
      <td>RAW.GZ <br>
or<br>
VOL.BZ2</td>
      <td><a href="./3D_greyscale/silicium.raw.gz">raw.gz</a> or&nbsp; <a
 href="./3D_greyscale/silicium.vol.bz2">vol.bz2</a></td>
      <td><img src="./3D_greyscale/silicium.jpg" alt="silicium.jpg"
 width="96"></td>
      <td><a href="http://labs.cs.sunysb.edu/labs/vislab/volvis/">VolVis
distribution</a> of SUNY Stony Brook, NY, USA.
<!-----------------------------------------------------------------><!--!--></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <center><b>Skull</b><br>
      <br>
256x256x256<br>
1:1:1</center>
Rotational b-plane x-ray scan of phantom of a human skull.
      </td>
      <td>RAW.GZ <br>
or<br>
VOL.BZ2</td>
      <td><a href="./3D_greyscale/skull.raw.gz">raw.gz</a> or <a
 href="./3D_greyscale/skull.vol.bz2">vol.bz2</a></td>
      <td><img src="./3D_greyscale/skull.jpg" alt="skull.jpg" width="96"></td>
      <td><a href="http://www.siemensmedical.com/">Siemens Medical
Systems</a>, Forchheim, Germany. </td>
    </tr>
  </tbody>
</table>
<br>
<b>All the datasets presented in this web page are supposed to be
copyleft. In case some references are wrong and should be adjusted, or
if the data are not copyleft, please do not hesitate to send an
e-Mail. </b>
<br>
<br>
<i>Go to <a href="data_code.php">Data sets main page</a> or <a
 href="http://tc18.org">TC18 main page</a>
<br>
<br>
<i>To submit a data, see the <a href="data_code.php">Data sets main
page</a></i>
<br>
</i>
<hr>

<?php include("footer1.html") ?>
