import serial

def read_rfid(port, baud_rate):
    try:
        # Open the serial port
        ser = serial.Serial(port, baud_rate, timeout=1)
        # print(f"Connected to {port} at {baud_rate} baud")

        while True:
            # Read data from the serial port
            data = ser.readline().decode('utf-8').strip()

            # Parse the RFID data if available
            if data.startswith("RFID Tag UID: "):
                rfid_number = data[len("RFID Tag UID: "):]
                print(rfid_number)

    except serial.SerialException as e:
        print(f"Error: {e}")

    finally:
        if ser.is_open:
            ser.close()

if __name__ == "__main__":
    # Replace 'COMx' with the actual port where your CP2102 is connected
    port_name = 'COM3'
    # Replace '9600' with the baud rate of your CP2102 (common baud rates are 9600, 115200, etc.)
    baud_rate = 9600

    read_rfid(port_name, baud_rate)