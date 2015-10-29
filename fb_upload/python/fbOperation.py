from facepy import GraphAPI
import lib
import sys
import re

# Initialize the Graph API with a valid access token (optional,
# but will allow you to do all sorts of fun stuff).
oauth_access_token = "CAACEdEose0cBAEimKmZBgRmlTr3mnVrmjvkeBg1kLAjFZC3obUP9T1oZA7zI0b0xl0ig5qIrxEGKVuodkXxYmJfSgsqmPUrVsFOVFROFAGhdHdyRZBoifwZAZAgZCpUqo2Kv4SJgXptZAxQnzbZAlKFjd0wbJsZCxiKWlWt3EA4tddZBkjtzUQGWtCrCjZBg2WrsEU4zS54zgpWEppKi2jcWpxzy"
graph = GraphAPI(oauth_access_token)

# Get my latest posts
# graph.get('me/posts')

#Post a photo of a parrot
# graph.post(
    # path = '960793297302151/photos',
    # source = open('parrot.jpg', 'rb'),
    # message = "bbbbbbbbbbb"
# )

def fetch_group(url_group):
    searchObj = re.search(r'groups/(.*?)/', url_group)
    return searchObj.group(1)

def create_album(paras):
    id_group = fetch_group(paras['id_group'])
    name = paras['name_album']
    message = paras['msg_album']
    oauth_access_token = "CAACEdEose0cBAEimKmZBgRmlTr3mnVrmjvkeBg1kLAjFZC3obUP9T1oZA7zI0b0xl0ig5qIrxEGKVuodkXxYmJfSgsqmPUrVsFOVFROFAGhdHdyRZBoifwZAZAgZCpUqo2Kv4SJgXptZAxQnzbZAlKFjd0wbJsZCxiKWlWt3EA4tddZBkjtzUQGWtCrCjZBg2WrsEU4zS54zgpWEppKi2jcWpxzy"
    graph = GraphAPI(oauth_access_token)
    graph.post(
        path = '/%s/albums'%id_group,
        name = name ,
        message = message,
        #privacy = {}
    )
    return 0

def main():
    paras = lib.readParas()
    func = getattr(sys.modules[__name__], paras['op'])
    func(paras)
 
if __name__ == "__main__":
    main()
   #create_album()