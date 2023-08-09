export enum AgentStatusEnum {
    "Pending" = "pending",
    "Approved" = "approved",
    "Rejected" = "rejected",
}
export type LandlordData = {
    id: number;
    status: string;
    is_paused: boolean;
    created_at: string;
    updated_at: string;
};
export enum LandlordStatusEnum {
    "Pending" = "pending",
    "Approved" = "approved",
    "Rejected" = "rejected",
}
export enum PropertyConditionEnum {
    "NEW" = "new",
    "OLD" = "old",
    "RENOVATED" = "renovated",
}
export type PropertyData = {
    id: number;
    name: string;
    price: string;
    description: string;
    condition: PropertyConditionEnum | null;
    status: PropertyStatusEnum | null;
    type: PropertyTypeEnum | null;
    furnishing: PropertyFurnishingEnum | null;
    bedrooms: number | null;
    bathrooms: number | null;
    parking: number | null;
    size: string | null;
    address: string | null;
    city: string | null;
    state: string | null;
    verified: boolean | null;
    featured: boolean | null;
    landlord: LandlordData;
    published_at: string | null;
    expired_at: string | null;
    sold_at: string | null;
    archived_at: string | null;
    verified_at: string | null;
    featured_at: string | null;
    deleted_at: string | null;
    created_at: string;
    updated_at: string;
};
export enum PropertyFurnishingEnum {
    "FURNISHED" = "furnished",
    "SEMI_FURNISHED" = "semi_furnished",
    "UNFURNISHED" = "unfurnished",
}
export enum PropertyStatusEnum {
    "AVAILABLE" = "available",
    "RENTED" = "rented",
    "PAUSED" = "paused",
}
export enum PropertyTypeEnum {
    "APARTMENT" = "apartment",
    "VILLA" = "villa",
    "OFFICE" = "office",
    "SHOP" = "shop",
    "WAREHOUSE" = "warehouse",
    "LAND" = "land",
    "OTHER" = "other",
}
export enum RolesEnum {
    "ADMIN" = "admin",
    "LANDLORD" = "landlord",
    "AGENT" = "agent",
    "TENANT" = "tenant",
    "USER" = "user",
}
export enum TenantStatusEnum {
    "Pending" = "pending",
    "Approved" = "approved",
    "Rejected" = "rejected",
}
export type UserData = {
    id: number;
    first_name: string;
    last_name: string;
    username: string;
    email: string;
    address: string;
    phone: string;
    zone: string;
    city: string;
    state: string;
    role: string;
    status: string;
    created_at: string;
    updated_at: string;
};
