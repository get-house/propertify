declare namespace App.Domain.Property.Data {
export type PropertyData = {
id: number;
name: string;
price: string;
description: string;
address: string;
city: string;
state: string;
size: string;
user_id: number;
};
}
declare namespace App.Enums {
export type RolesEnum = 'admin' | 'landlord' | 'agent' | 'tenant' | 'user';
}
