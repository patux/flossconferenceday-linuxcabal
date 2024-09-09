#!/bin/bash
orig=$1
curvas=${orig//.svg/-curvas.svg}
cp $orig $curvas
inkscape $curvas \
     --verb=UnlockAllInAllLayers \
     --verb=UnhideAllInAllLayers \
     --verb=EditSelectAllInAllLayers \
     --verb=ObjectToPath \
     --verb=FileSave \
     --verb=FileQuit
