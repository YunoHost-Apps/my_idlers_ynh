#!/bin/bash

#=================================================
# COMMON VARIABLES AND CUSTOM HELPERS
#=================================================

composer_version="2.5.5"

# will not stay stable over installs, should not be a problem
token=$(tr -dc A-Za-z0-9 </dev/urandom | head -c 60)
