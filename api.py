# Product service

from flask import flask
from flask_restful import Resource, Api

app = Flask(__name__)
api = Apo(app)

class Product(Resource):
    def get(self):
        return {
            'food': ['Meat',
            'Bread',
            'milk']
        }

api.add_resource(Product, '/')

if __name__== '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)