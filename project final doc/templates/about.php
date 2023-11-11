<!DOCTYPE html>
<html>
<head>
  <title>Vitamin Classification with Deep Learning</title>
  <style>
    table {
  border: 1px solid black;
}

th, td {
  font-family: sans-serif;
  font-size: 16px;
}
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #9494b8;
    }
    .member-img {
      width: 800px;
      height: 900px;
      object-fit: cover;
      
      margin-bottom: 15px;
    }
    .header {
      background-color:#52527a;
      color: #fff;
      text-align: center;
      padding: 10px;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      animation: fadeIn 1s forwards;
    }

    @keyframes fadeIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Vitamin Classification with Deep Learning</h1>
  </div>
  <div class="container fade-in">
    <p>
      About: The vitamins have various biochemical functions. Vitamins have many types such as vitamin A, vitamin B, vitamin C, vitamin 
      D, vitamin E. Each vitamin has unique properties and molecular structure. This will take care of various biochemical functions in the
      body. In this paper we presented a system that recognize the five types of vitamins based on deep learning using python on CoLab editor, 
      and classifying, using dataset contain 15213 images and we used 9736 samples with 64% of the total samples for training, 3043 samples 
      with 20% of the total samples for validation and 2434 sample with 16% of the total samples for testing, the designed model is
      proportional, which indicates the effectiveness of this method
    </p>

    <h2>Keywords:</h2>
    <p>Vitamin Classification, Deep Learning, Classification, Detection, AI, Python, CoLab</p>

    <h2>INTRODUCTION</h2>
    <p>
      The vitamins are natural and essential nutrients, required in small quantities and play a major role in growth and development, repair 
      and healing wounds, maintaining healthy bones and tissues, for the proper functioning of an immune system, and other biological 
      functions. These essential organic compounds have diverse biochemical functions.
    </p>
    <table style="border: 1px solid black; font-family: sans-serif; font-size: 16px;">
  <thead>
    <tr>
      <th>Vitamin</th>
      <th>Function</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Vitamin A</td>
      <td>Helps in the development and maintenance of teeth, skeletal and soft tissues. It is also important for the maintenance of skin and the mucous membrane. More importantly, the mucous membrane promotes good eyesight, specifically in low light. Beta-carotene, a form of vitamin A, protects cells from free-radicals. This may reduce the risk of cancer.</td>
    </tr>
    <tr>
      <td>Vitamin B</td>
      <td>Promotes cell health; important for the development of RBCs; required for healthy brain function; involved in the production of hormones and cholesterol; required for proper muscle tone; important for the growth and repair of body tissues</td>
    </tr>
    <tr>
      <td>Vitamin C</td>
      <td>Helps to heal wounds more effectively; aids the absorption of iron; helpful for the maintenance of cartilage, teeth and bones; vitamin C is also an antioxidant, hence it aids in blocking some damage caused by free radicals</td>
    </tr>
    <tr>
      <td>Vitamin D</td>
      <td>Required for mineral homeostasis; required for the formation of bones; required to maintain normal blood levels of phosphorus and calcium</td>
    </tr>
    <tr>
      <td>Vitamin E</td>
      <td>Functions as a powerful antioxidant; protects the cells from the effects of free-radicals; boosts immune system; required for full filling various cellular functions</td>
    </tr>
  </tbody>
</table>
<h2>Architecture</h2>
<p>
A fixed size of (224 * 224) RGB image was given as input to this network which means that the matrix was of shape (224,224,3).
The only preprocessing that was done is that they subtracted the mean RGB value from each pixel, computed over the whole training set.
Used kernels of (3 * 3) size with a stride size of 1 pixel, this enabled them to cover the whole notion of the image.
spatial padding was used to preserve the spatial resolution of the image.
max pooling was performed over a 2 * 2 pixel windows with sride 2.
this was followed by Rectified linear unit(ReLu) to introduce non-linearity to make the model classify better and to improve computational time as the previous models used tanh or sigmoid functions this proved much better than those.
implemented three fully connected layers from which first two were of size 4096 and after that a layer with 1000 channels for 1000-way ILSVRC classification and the final layer is a softmax function.
The column E in the following table is for VGG19 (other columns are for other variants of VGG models):
    </p>
<img src="Images/vgg19.png" alt="Image of VGG19 architecture" class="member-img">

    <a href="#" class="back-to-top-button">Back to Top</a>
  </div>
</body>
</html>
