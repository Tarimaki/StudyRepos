import cgi

def GetParameter():
    form = cgi.FieldStorage()
    id = form.getvalue('id')
    
    return id