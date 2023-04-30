# pip install PyPDF2
import PyPDF2
from PyPDF2 import PdfReader


myfile = open('sample.pdf', mode='rb')
var = PdfReader(myfile)
p = var.pages[0]
print('Number of pages: ' + str(len(var.pages)))
print('The text content: ' + p.extract_text())
count = 0
# Every page of a PDF document can contain an arbitrary amount of images. 
# The names of the files may not be unique.
for image_file_object in p.images:
    with open(str(count) + image_file_object.name, "wb") as fp:
        fp.write(image_file_object.data)
        count += 1
print('The image content: ')
print(fp)   #this line extract the image and save it next to the pdf file.

myfile.close()
