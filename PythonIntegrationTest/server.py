from flask import Flask, render_template
app = Flask(__name__)
import matplotlib
import matplotlib.pyplot as plt
import urllib
import webbrowser

@app.route('/')
def index():
  return render_template('index.html')

@app.route('/my-link/')
def my_link():
  print ('I got clicked!')
  plt.plot([0, 1, 2, 3, 4], [0, 3, 5, 9, 11])

  plt.xlabel('Months')
  plt.ylabel('Books Read')

  plt.savefig('books_read.png')

  return webbrowser.open('http://example.com')

if __name__ == '__main__':
  app.run(debug=True)