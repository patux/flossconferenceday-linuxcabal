#!/usr/bin/env bash
set -x

# variables
path=$( dirname $( readlink -f $0 ) )/..
path=$( readlink -f $path )
local_fonts="$HOME/.local/share/fonts"

# asegurarnos de que el directorio existe
if [[ ! -d $local_fonts ]]; then
    umask 027
    mkdir -p $local_fonts
fi

# copiar las fuentes
cp $path/fuentes/*.ttf $path/fuentes/*.otf $local_fonts
