from tensorflow.keras.models import load_model
from tensorflow.keras.preprocessing import image
from flask import Flask, render_template, request
import os
import numpy as np
from PIL import Image

app = Flask(__name__)
model = load_model(r"vitamin_detection.h5", compile=False)

@app.route('/')
def index():
    return render_template("index.html")

@app.route('/predict', methods=['POST'])
def upload():
    if request.method == 'POST':
        f = request.files['images']
        basepath = os.path.dirname(__file__)
        filepath = os.path.join(basepath, 'uploads', f.filename)
        f.save(filepath)

        # Resize the image to match the expected input shape
        img = Image.open(filepath)
        img = img.resize((224, 224))
        
        x = image.img_to_array(img)
        x = np.expand_dims(x, axis=0)
        pred = np.argmax(model.predict(x), axis=1)
        index = ['VitaminA', 'VitaminB', 'VitaminC', 'VitaminD', 'VitaminE']
        result = "The Vitamin Info is: " + str(index[pred[0]])

        return result

if __name__ == '__main__':
    app.run(debug=True)
