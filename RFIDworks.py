import serial
from flask import Flask, render_template

app = Flask(__name__)

# Initialize RFID data variable
rfid_data = ""

def read_rfid(port, baud_rate):
    global rfid_data

    try:
        # Open the serial port
        ser = serial.Serial(port, baud_rate, timeout=1)

        while True:
            # Read data from the serial port
            data = ser.readline().decode('utf-8').strip()

            # Parse the RFID data if available
            if data.startswith("RFID Tag UID: "):
                rfid_number = data[len("RFID Tag UID: "):]
                print(rfid_number)

                # Update global variable with RFID data
                rfid_data = rfid_number

    except serial.SerialException as e:
        print(f"Error: {e}")

    finally:
        if ser.is_open:
            ser.close()

@app.route('/')
def home():
    return render_template('index.html', rfid_data=rfid_data)

if __name__ == "__main__":
    # Replace 'COMx' with the actual port where your CP2102 is connected
    port_name = 'COM4'
    # Replace '9600' with the baud rate of your CP2102 (common baud rates are 9600, 115200, etc.)
    baud_rate = 9600

    # Start the RFID reading in a separate thread
    import threading
    rfid_thread = threading.Thread(target=read_rfid, args=(port_name, baud_rate))
    rfid_thread.start()

    # Run the Flask app
    app.run(debug=True)
