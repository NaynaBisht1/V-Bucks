# app.py
from flask import Flask, render_template, jsonify
import time
from mfrc522 import SimpleMFRC522

app = Flask(__name__)

reader = SimpleMFRC522()

def read_rfid():
    try:
        print("Hold a card near the reader...")
        id, text = reader.read()
        return str(id)
    except Exception as e:
        print(e)
        return None

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/scanRFID', methods=['POST'])
def scan_rfid():
    rfid_data = read_rfid()
    if rfid_data:
        return jsonify({'success': True, 'rfid_data': rfid_data})
    else:
        return jsonify({'success': False, 'message': 'No RFID card detected'})

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=5000)
