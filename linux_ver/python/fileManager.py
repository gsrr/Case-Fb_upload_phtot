import lib
import sys
import os
import json
import shutil

def browseDir(paras):
    dirs = []
    files = os.listdir(paras['path'])
    for file in files:
        path = paras['path'] + file
        if os.path.isdir(path):
            dirs.append(path.decode("big5"))
    #print dirs
    print json.dumps(dirs)

def copyFiles(srcPath, dstPath):
    files = os.listdir(srcPath)
    for file in files:
        shutil.copyfile(srcPath + "/" + file, dstPath + "/" + file)

def listDir(paras):
    data = []
    files = os.listdir(paras['path'])
    #copy files
    #copyFiles(paras['path'], "image")
    for file in files:
        data.append("image/" + file)
    print json.dumps(sorted(data))

def readCsv(paras):
    files = os.listdir(paras['path'])
    #copy files
    for file in files:
        data.append("/fb_upload/image/" + file)
    print json.dumps(data)
    
def main():
    paras = lib.readParas()
    func = getattr(sys.modules[__name__], paras['op'])
    func(paras)
 
if __name__ == "__main__":
    main()
