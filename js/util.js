var LABEL_EMOTIONS = {0:'憤怒', 1:'厭惡', 2:'恐懼', 3:'快樂', 4:'悲傷', 5:'驚訝', 6:'無表情'};
var LABEL_GENDER = {0:'Woman', 1:'Man'};

function preprocess_input(im) {
  img = tf.fromPixels(im, 1).toFloat()
  offset = tf.scalar(255);
  x1 = tf.scalar(0.5);
  x2 = tf.scalar(2);
  normalized = img.div(offset).sub(x1).mul(x2);
  batched = normalized.reshape([1, 64, 64, 1]);

  return batched;
}
