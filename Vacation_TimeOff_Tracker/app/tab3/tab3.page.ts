import { Component } from '@angular/core';
import { NavController, AlertController, ToastController } from '@ionic/angular';

@Component({
  selector: 'app-tab3',
  templateUrl: 'tab3.page.html',
  styleUrls: ['tab3.page.scss']
})
export class Tab3Page {

  public items = [
    {
      location: "Basement", name: "Bar", material: "Paint", SKU: "ABC1234", store: "Home Depot"
    },
    {
      location: "Basement", name: "Gym", material: "Paint", SKU: "ZYX987", store: "Home Depot"
    },
    {
      location: "Basement", name: "Theater Room", material: "Tile", SKU: "TRAV9113", store: "Lowes"
    },
    {
      location: "Basement", name: "Storage", material: "Paint", SKU: "BBB1357", store: "Lowes"
    },
  ];
  constructor(public navCtrl: NavController, 
              public alertCtrl: AlertController, 
              public toastCtrl: ToastController ) {}

  async removeItem(item: any, index: any) {
    console.log("Successfully removed room info - ", item, index);
    const toast = this.toastCtrl.create({
      message: "Successfully removed room info - " + item.name + " " + item.name + "  ",
      duration: 3000
    }); 
    (await toast).present();
    this.items.splice(index, 1);
  }
  async addItem() {
    console.log("Adding item");
    this.showAddItemPrompt();
  }
  async editItem(item: any, index: any) {
    console.log("Successfully edited room info - ", item, index);
    const toast = this.toastCtrl.create({
      message: "Successfully edited room info - " + item.location + "  " + item.name + "  ",
      duration: 3000
    }); 
    (await toast).present();
    this.showEditItemPrompt(item ,index);
  }
  async shareItem(item: any, index: any) {
    console.log("Successfully shared item - ", item, index);
    const toast = this.toastCtrl.create({
      message: "Successfully shared room info - " + item.location + "  " + item.name + "  ",
      duration: 3000
    });
    (await toast).present();
    this.showShareItemPrompt(item ,index);
  }

  async showShareItemPrompt(item: any, index: any) {
    const prompt = this.alertCtrl.create(
      {
      header: "Share Room Info",
      subHeader: "Specify phone, email, or both:",
      inputs: [
        {
        name: "phone",
        placeholder: "phone"
        },
        {
        name: "email",
        placeholder: "email"
        },
        {
          name: "message",
          placeholder: "message"
        },
        ],
      buttons: [
        {
        text: "Cancel",
        handler: data => {
          console.log("Cancel clicked");  }
        },
        {
        text: "Share",
        handler: item => {
          console.log("Share clicked", item);
          this.items.push(item);   }
        }
               ]
    });
    (await prompt).present();
  }
  
  async showAddItemPrompt() {
    const prompt = this.alertCtrl.create(
      {
      header: "Add Basement Room Info",
      subHeader: "Please enter Room Info.",
      inputs: [
        {
        name: "name",
        placeholder: "name"
        },
        {
        name: "material",
        placeholder: "material"
        },
        {
        name: "SKU",
        placeholder: "SKU"
        },
        {
        name: "store",
        placeholder: "store"
        }
        ],
      buttons: [
        {
        text: "Cancel",
        handler: data => {
          console.log("Cancel clicked");  }
        },
        {
        text: "Save",
        handler: item => {
          console.log("Save clicked", item);
          this.items.push(item);   }
        }
               ]
    });
    (await prompt).present();
  }

  async showEditItemPrompt(item: any, index: any) {
    const prompt = this.alertCtrl.create(
      {
      header: "Edit Room Info",
      subHeader: "Please edit the Room Info selected.",
      inputs: [
        {
        name: "name",
        placeholder: "name",
        value: item.name
        },
        {
        name: "material",
        placeholder: "material",
        value: item.material
        },
        {
        name: "SKU",
        placeholder: "SKU",
        value: item.SKU
        },
        {
        name: "store",
        placeholder: "store",
        value: item.store
        },
              ],
      buttons: [
        {
        text: "Cancel",
        handler: data => {
          console.log("Cancel clicked");  }
        },
        {
        text: "Save",
        handler: item => {
          console.log("Edit clicked", item);
          this.items[index] = item;  }
        }
               ]
    }); 
    (await prompt).present();
  }
}

