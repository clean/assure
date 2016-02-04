# -*- coding: utf-8 -*-
import sys
import os
extensions = []
templates_path = ['_templates']
source_suffix = '.rst'
master_doc = 'index'
project = u'clean/assure'
copyright = u'2016, Roman Nowicki'
author = u'Roman Nowicki'
version = u'latest'
release = u'latest'
language = None
exclude_patterns = ['_build']
pygments_style = 'sphinx'
keep_warnings = False
todo_include_todos = False
html_theme = 'sphinx_rtd_theme'
html_favicon = None
html_static_path = ['_static']
html_extra_path = []
htmlhelp_basename = 'cleanassuredoc'
latex_elements = {
}
latex_documents = [
    (master_doc, 'cleanassure.tex', u'clean/assure Documentation',
     u'Roman Nowicki', 'manual'),
]
man_pages = [
    (master_doc, 'cleanassure', u'clean/assure Documentation',
     [author], 1)
]
man_show_urls = False
texinfo_documents = [
    (master_doc, 'cleanassure', u'clean/assure Documentation',
     author, 'cleanassure', 'One line description of project.',
     'Miscellaneous'),
]
